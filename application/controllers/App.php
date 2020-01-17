<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('mapp');
		// $this->load->library('session');
		$this->load->helpers('url');
		$this->load->database();
		$this->load->helper('string');
		
		require_once(APPPATH.'controllers/Email.php'); //include Email controller

		

		// if (password_verify("john", $hashed)) {
		// 	echo 'match';
		// } else {
		// 	echo 'failed';
		// }
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function tutors() {
		$this->load->view('tutors');
	}

	public function course() {
		$this->load->view('course');
	}

	public function user_home() {
		$this->load->view('user_home');
	}

	public function signup_action() {

		$clean = true;
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$subscription = $_POST['subscription'];

		$activation_code = random_string('alnum', 25) . time();


		if($subscription == "") {
			$subscription = "no";
		}

		// check length of fullname
		if(strlen($fullname) < 4) {
			echo '<li class="error">Your fullname must have at least 4 characters</li>';
			$clean=false;
		}

		// validate email address pattern
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			// email pattern is not valid
			echo '<li class="error">Please enter a valid Email Address</li>';
			$clean=false;

		} 

		
		// check if email is already in use
		$query = $this->db->get_where('tutors', array("email" => $email));
		if($this->db->affected_rows() > 0) {

			// email is already in use
			echo '<li class="error">Email Address is already in use</li>';
			$clean=false;

		} 

		// check length of password
		if(strlen($password) < 6) {
			echo '<li class="error">You password must have at least 6 characters</li>';
			$clean=false;
		}

		if($clean == true) { 
			// hash password
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

			$tutorData = array(
				'fullname' => $fullname,
				'email' => $email,
				'password' => $hashed_password,
				'subscribe_to_mails' => $subscription,
				'activation_code' => $activation_code
			);
			$this->db->set('date_time', 'NOW()', FALSE);
			$this->db->insert('tutors', $tutorData);
			echo '<div class="success">Your registration was successfull, Check your mail for a confirmation link</li>';
			
			// send mail here
			$emailObj = new Email();  //create object 
			
			// Email body content
            $body = "<h1>Welcome to Codac</h1>
                <p>Click on the button below to activate your account</p>
                <button>Activate Account</button>";
            
        
            $response = $emailObj->sendMail($email, "test@codac.pulaakutrade.com", "Codac", "Activate Your Account",  $body); //call function
           
// 				sendMail($to, $from, $from_name, $subject, $body);
		
// 			   $to   = 'john.ebri@yahoo.com';
//             $from = 'test@codac.pulaakutrade.com';
//             $name = 'PHPMailer and CodeIgniter';
//             $subj = 'Test Message';
//             $msg = 'This is mail about testing mailing using PHP.';
	
//             $error=smtpmailer($to,$from, $name ,$subj, $msg);
			
			// clear the form
			echo '<script>document.getElementById("signupform").reset()</script>';
		}

	}

	public function dashboard() {
		$this->load->view('dashboard');
	}

	public function createcourse() {
		$this->load->view('createcourse');
	}



} // end of app controller
