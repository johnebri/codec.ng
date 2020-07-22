<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('mapp');
		$this->load->library('session');
		$this->load->helpers('url', 'form');
		$this->load->database();
		$this->load->helper('string');
		// $this->load->helper('cookie');

		$this->load->library('email'); //Load the library
	}

	public function auth()
	{
		if($this->session->userdata("adminId") == "") {
			redirect(base_url().'admin/login');
		}		
	}

	public function index()
	{
		$this->auth();
		$this->load->view('admin/dashboard');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function loginAction()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$query = $this->db->get_where('admins', array("email" => $email));
		$count = $this->db->affected_rows();
		if ($count > 0) {
			// get the admin details
			$res = $query->result_array();
			foreach ($res as $admin) {
				$adminId = $admin["admin_id"];
				$firstname = $admin["firstname"];
				$lastname = $admin["lastname"];
				$email = $admin["email"];
				$hashedPassword = $admin["password"];
				$role = $admin["role"];
			}
			// check the password
			if (password_verify($password, $hashedPassword)) {
				$userData = array(
					"adminId" => $adminId,
					"fullname" => $firstname . ' ' . $lastname,
					"email" => $email,
					"role" => $role
				);
				$this->session->set_userdata($userData);
				echo $this->session->userdata('fullname');
				redirect(base_url() . 'admin/dashboard');
			} else {
				$data = array(
					'loginError' => 'yes'
				);
				$this->load->view('admin/login', $data);
			}
		} else {
			// no use found
			$data = array(
				'loginError' => 'yes'
			);
			$this->load->view('admin/login', $data);
		}
	}

	public function newAdmin()
	{
		$this->auth();
		$this->load->view('admin/admin_new');
	}

	public function sendMail($receiverEmail, $subject, $message)
	{
		$this->load->library('email');
		$this->email->from('noreply@codac.ng', 'CODAC');
		$this->email->to($receiverEmail);
		$this->email->bcc('john.ebri@yahoo.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}

	public function newAdminAction()
	{
		$this->auth();
		$password = random_string('numeric', 6);
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'password' => $hashedPassword,
			'role' => $this->input->post('role')
		);

		$email = $data["email"];
		$subject = "Login Details";
		$message = '
			<h1>Welcome to Codac Admin</h1>
			<p>An admin account has been created for you on Codac.</p>
			<p>Click <a href="' . base_url() . 'admin/login"> Here </a> to login to your account</p>
			<p>Or copy and paste this link to the address bar of your browser: ' . base_url() . 'admin/login' . '</p>
			<p>Username: ' . $email . '</p>
			<p>Password: ' . $password . '</p>
		';

		// check if email alreaedy exists
		$query = $this->db->get_where('admins', array("email" => $data["email"]));
		if ($this->db->affected_rows()) {
			echo 'email is already in use';
		} else {
			// email is good, proceed
			$res = $this->db->insert('admins', $data);
			if ($res > 0) {
				// admin registered // send email to admin
				$this->sendMail($email, $subject, $message);
				redirect(base_url() . 'admin/newAdmin?success');
			} else {
				// registration failed
				echo 'error';
			}
		}
	}

	public function dashboard()
	{
		$this->auth();
		$this->load->view('admin/dashboard');
	}

	public function courses()
	{
		$this->auth();
		$this->load->view('admin/courses');
	}

	public function students()
	{
		$this->load->view('admin/students');
	}

	public function tutors()
	{
		$this->load->view('admin/tutors');
	}

	public function admins()
	{
		$this->load->view('admin/admins');
	}

	public function profile()
	{
		$this->load->view('admin/profile');
	}


	/*===================================================
	change password
	*==================================================*/
	public function changePassword()
	{
		$this->auth();
		$this->load->view('admin/change-password');
	}

	public function changePasswordAction()
	{
		$this->auth();
		$oldPassword = $this->input->post("oldPassword");
		$newPassword = $this->input->post("newPassword");
		$confirmNewPassword = $this->input->post("confirmNewPassword");

		$errors = array();
		$valid = true;

		// check if old password is correct
		$query = $this->db->get_where('admins', array("admin_id" => $this->session->userdata("adminId")));
		$res = $query->result_array();
		foreach ($res as $val) {
			$hashedPassword = $val["password"];
		}
		if (!password_verify($oldPassword, $hashedPassword)) {
			array_push($errors, 'Password does not exist');
			$valid = false;
		}

		// check if new passwords meet criteria
		if (strlen($newPassword) < 6) {
			array_push($errors, 'Password must have at least 6 characters');
			$valid = false;
		}

		// check if new password match
		if ($newPassword != $confirmNewPassword) {
			array_push($errors, 'Password do not match');
			$valid = false;
		}

		// update password
		if ($valid == true) {
			// valid data, update password
			$newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
			$data = array(
				'password' => $newHashedPassword
			);
			$this->db->set($data);
			$this->db->where('admin_id', $this->session->userdata("adminId"));
			$updateRes = $this->db->update('admins');
			if ($updateRes > 0) {
				redirect(base_url() . 'admin/changePassword?success');
			} else {
				redirect(base_url() . 'admin/changePassword?changePasswordError');
			}
		} else {
			// error exists
			$data['errors'] = $errors;
			$this->load->view('admin/change-password', $data);
		}
	}

	public function forgotPassword()
	{
		$this->load->view('admin/forgotPassword');
	}

	public function forgotPasswordAction()
	{
		$email = $this->input->post('email');
		// check if email exists
		$query = $this->db->get_where('admins', array("email" => $email));
		if ($this->db->affected_rows() > 0) {
			// email exist 	// send email
			// generate code
			$randStr = random_string('alnum', 20);
			$time = time();
			$code = $randStr . '' . $time;
			$res = $query->result_array();
			foreach ($res as $val) {
				$adminId = $val["admin_id"];
			}
			// insert code in db
			$data = array(
				'code' => $code
			);
			$this->db->set($data);
			$this->db->where('admin_id', $adminId);
			$this->db->update('admins');

			$subject = "Password Reset";
			$message = '
				<h1>Reset Your Password</h1>
				<p>Click <a href="' . base_url() . 'admin/resetPassword?code=' . $code . '"> Here </a> to reset your password</p>
				<p>Or copy and paste this link to the address bar of your browser: ' . base_url() . 'admin/resetPassword?code=' . $code . '' . '</p>
			';
			$this->sendMail($email, $subject, $message);
			redirect(base_url() . 'admin/forgotPassword?emailSent');
		} else {
			// email does not exist
			$data = array('forgotPasswordError' => 'yes');
			$this->load->view('admin/forgotPassword', $data);
		}
	}

	public function resetPassword()
	{

		$code = $_GET["code"];
		// check if code is valid
		$query = $this->db->get_where('admins', array("code" => $code));
		if ($this->db->affected_rows() > 0) {
			// code exists
			$data = array('code' => $code);
			$this->load->view('admin/resetPassword', $data);
		} else {
			// code does not exists
			echo '<h1>Invlid Link</h1>';
			exit();
		}
	}

	public function resetPasswordAction()
	{

		$code = $this->input->post('code');
		$password = $this->input->post("password");
		$confirmPassword = $this->input->post("confirmPassword");
		$errors = array();
		$valid = true;

		// check if code is correct
		$query = $this->db->get_where('admins', array('code' => $code));
		if ($this->db->affected_rows() > 0) {
			// link exists, get admin details
			$res = $query->result_array();
			foreach ($res as $val) {
				$adminId = $val["admin_id"];
			}

			// check if password has upto 6 characters
			if (strlen($password) < 6) {
				array_push($errors, 'Your password must have at least 6 characters');
				$valid = false;
			}

			// check if passwords match
			if ($password != $confirmPassword) {
				array_push($errors, 'Your passwords do not match');
				$valid = false;
			}

			if ($valid == true) {
				// hash and update password
				$newHashedPassword = password_hash($password, PASSWORD_DEFAULT);
				$data = array(
					'password' => $newHashedPassword
				);
				$this->db->set($data);
				$this->db->where('admin_id', $adminId);
				$updateRes = $this->db->update('admins');
				if ($updateRes > 0) {
					redirect(base_url() . 'admin/changePassword?success=yes&code=' . $code . '');
				} else {
					redirect(base_url() . 'admin/changePassword?changePasswordError=yes&code=' . $code . '');
				}
			} else {
				$data = array(
					'errors' => $errors,
					'code' => $code
				);
				$this->load->view('admin/resetPassword', $data);
			}
		} else {
			// code does not exists
			echo '<h1>Invlid Link</h1>';
			exit();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('adminId');
		$this->session->unset_userdata('role');
		$this->session->sess_destroy();
		redirect(base_url() . 'admin/login');
	}
} // end of admin controller
