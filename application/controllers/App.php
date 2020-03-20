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
		$this->load->helper('cookie');
		
		//removed this, using CI email now require_once(APPPATH.'controllers/Email.php'); //include Email controller	

		// if (password_verify("john", $hashed)) {
		// 	echo 'match';
		// } else {
		// 	echo 'failed';
		// }
		
		$this->load->library('email'); //Load the library
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
		$role = $_POST['role'];

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
		$query = $this->db->get_where('users', array("email" => $email));
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
				'role' => $role,
				'activation_code' => $activation_code
			);
			$this->db->set('date_time', 'NOW()', FALSE);
			$this->db->insert('users', $tutorData);
			echo '<div class="success">Your registration was successfull, Check your mail for a confirmation link</li>';
			
			// send mail here
			// $emailObj = new Email();  //create object 
			
			// activation link
			$activationLink = base_url().'activateAccount/'.$activation_code;

			// Email body content
        //     $body = '<h1>Welcome to Codac</h1>
    				// <p>Click on the button to activate your account</p>
    				// <a href="'.$activationLink.'"><button>Activate Your Account</button></a>';
				
            // $body = "Click here " . $activationLink . " to activate your account.";
        
			// $response = $emailObj->sendMail($email, "test@codac.pulaakutrade.com", "Codac", "Activate Your Account",  $body); 
			$message = 'Activate Your account';
			 
			// $this->send($email, 'Activate Your Account', $body); 
			
			
			$body = $this->body($fullname, $activationLink);
			
			
			$this->email->from('donotreply@codac.com', 'CODAC');  //set sender email
            $this->email->to($email);  //set recipient email
            // $this->email->cc('johnebri18@gmail.com'); //optional
            // $this->email->bcc('john.ebri@yahoo.com'); //optional
            
            $this->email->subject('Activate Your Account'); //Set email subject
            $this->email->message($body); //Set email message
            
           // $this->email->send(); //send the email
            
            if ($this->email->send()) {
                echo 'Your Email has successfully been sent.';
            } else {
                show_error($this->email->print_debugger());
            }
        
        
			
			// echo '<h1>'.$response.'</h1>';
//call function
           
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

	public function getrole() {
		echo 'getting role';
	}

	public function activateAccount($code) {
		// check code
		$query = $this->db->get_where('users', array('activation_code'=>$code));
		if($this->db->affected_rows()) {
			// code found, activate account
			// get user details
			$result = $query->result_array();
			foreach($result as $val) {
				$user_id = $val["user_id"];
				$activated = $val["activated"];
				
				$fullname = $val['fullname'];
				$role = $val['role'];
				$email = $val['email'];
				$userId = $val['user_id'];
			}

			// check if user is already activated
			if($activated == 1) {
				// account is already activated
				echo 'your account is already activated';
			} else {
				// account is not activated, activate now
				$data = array(
					'activated' => 1
				);
				$this->db->set($data);
				$this->db->where('user_id', $user_id);
				$this->db->update('users');	

				// check if account activation succeeded
				if ($this->db->affected_rows() > 0) {
					// account activation succeeded
					// echo 'account activated successfully';
					// log user in
					
						$userIdCookie= array(
                           'name'   => 'userId',
                           'value'  => $userId,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($userIdCookie);
                       
                       	$fullnameCookie= array(
                           'name'   => 'fullname',
                           'value'  => $fullname,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($fullnameCookie);
                       
                       $emailCookie= array(
                           'name'   => 'email',
                           'value'  => $email,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($emailCookie);
                       
                        $roleCookie= array(
                           'name'   => 'role',
                           'value'  => $role,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($roleCookie);
    
    
    					if($role == 'student') {
    						echo '<script>window.location.href = "'.base_url().'studentdashboard"</script>';
    					} else if ($role == 'teacher') {
    						echo '<script>window.location.href = "'.base_url().'dashboard"</script>';
    					}					
    					
						
				} else {
					// account activation failed
					echo 'account activation failed';
					// show activation error page
				}
			}

		} else {
			// code not found
			echo 'Invalid Activation Code';
		}
	}

	public function loginAction() {

		$clean = true;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$selectedRole = $_POST['role'];

		if($email == "") {
			echo '<li class="error">Email field is mandatory </li>';
			$clean = false;
		}

		if($password == "") {
			echo '<li class="error">Password field is mandatory </li>';
			$clean = false;
		}		

		if($clean == true) {		

			// check if email exist
			$query = $this->db->get_where('users', array("email" => $email));
			if($this->db->affected_rows() > 0) {
				// user found, get user details
				$res = $query->result_array();
				foreach($res as $val) {
					$hashedPassword = $val['password'];
					$activated = $val["activated"]; 
					$userId = $val['user_id'];
					$role = $val['role'];
					$fullname = $val["fullname"];
				}

				if($selectedRole != $role) {
					echo '<li class="error">You do not have access to login as a trainer</li>';
					return false;
				}

				if (password_verify($password, $hashedPassword)) {
					// password match
					// check if account is activated
					if($activated == 1) {
						// login user
						
						/*$userData = array(
							"userId" => $userId,
							"fullname" => $fullname,
							"email" => $email,
							"role" => $role
						);
						$this->session->set_userdata($userData);*/
						
						$userIdCookie= array(
                           'name'   => 'userId',
                           'value'  => $userId,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($userIdCookie);
                       
                       	$fullnameCookie= array(
                           'name'   => 'fullname',
                           'value'  => $fullname,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($fullnameCookie);
                       
                       $emailCookie= array(
                           'name'   => 'email',
                           'value'  => $email,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($emailCookie);
                       
                        $roleCookie= array(
                           'name'   => 'role',
                           'value'  => $role,
                           'expire' => '3600',
                        );
                       $this->input->set_cookie($roleCookie);


						if($role == 'student') {
							echo '<script>window.location.href = "'.base_url().'studentdashboard"</script>';
						} else if ($role == 'teacher') {
							echo '<script>window.location.href = "'.base_url().'dashboard"</script>';
						}					

					} else {
						// account is not active
						echo '<li class="error">Your account has not been activated</li>';
					}
				} else {
					// wrong password
					echo '<li class="error">Incorrect username or password</li>';
				}
				
			} else {
				// wrong email
				echo '<li class="error">Incorrect username or password</li>';
			}
		}


	}

	public function studentdashboard() {
		$this->load->view('studentdashboard');
	}

	public function logout() {
		
		if( $this->input->cookie('role',true) == 'student' ) {
			$page = 'student';
		} else if( $this->input->cookie('role',true) == 'teacher' ) {
			$page = 'teacher';
		}

// 		$this->session->unset_userdata('fullname');
// 		$this->session->unset_userdata('email');
// 		$this->session->unset_userdata('user_id');
// 		$this->session->unset_userdata('role');
// 		$this->session->sess_destroy();

        delete_cookie('fullname'); 
        delete_cookie('email'); 
        delete_cookie('userId'); 
        delete_cookie('role'); 

		if($page == 'student') {
			redirect(base_url());
		} else if ($page == 'teacher') {
			redirect(base_url() .'tutors');
		}
		
	}
	
	public function send($to, $subject, $message) {
	    
	    
	    
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        // $to = 'john.ebri@yahoo.com';
        // $subject = 'test mail';
        // $message = 'this is the message';
        
        // $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        // $this->email->set_header('Content-type', 'text/html');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
    
    function body($fullname, $activationLink)
    // function body()
    {
    
    
    $body = "
    <!doctype html>
    <html>
    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width' />
    
    <title>Simple Transactional Email</title>
    <style>
        /* -------------------------------------
        GLOBAL RESETS
        ------------------------------------- */
        
        /*All the styling goes here*/
        
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }
        
        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }
        
        /* -------------------------------------
        BODY & CONTAINER
        ------------------------------------- */
        
        .body {
            background-color: #f6f6f6;
            width: 100%;
        }
        
        / Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something /
        .container {
            display: block;
            margin: 0 auto !important;
            / makes it centered /
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }
        
        / This should also be a block element, so that it will fill 100% of the .container /
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }
        
        /* -------------------------------------
        HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%;
        }
        
        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }
        
        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }
        
        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }
        
        /* -------------------------------------
        TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }
        
        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }
        
        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }
        
        a {
            color: #3498db;
            text-decoration: underline;
        }
        
        /* -------------------------------------
        BUTTONS
        ------------------------------------- */
        .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
        padding-bottom: 15px; }
        .btn table {
            width: auto;
        }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }
        
        .btn-primary table td {
            background-color: #3498db;
        }
        
        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }
        
        /* -------------------------------------
        OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
             margin-bottom: 0;
        }
        
        .first {
            margin-top: 0;
        }
        
        .align-center {
            text-align: center;
        }
        
        .align-right {
            text-align: right;
        }
        
        .align-left {
            text-align: left;
        }
        
        .clear {
            clear: both;
        }
        
        .mt0 {
            margin-top: 0;
        }
        
        .mb0 {
            margin-bottom: 0;
        }
        
        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }
        
        .powered-by a {
            text-decoration: none;
        }
        
        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }
        
        /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
            font-size: 16px !important;
        }
        table[class=body] .wrapper,
        table[class=body] .article {
            padding: 10px !important;
        }
        table[class=body] .content {
            padding: 0 !important;
        }
        table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
        }
        table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }
        table[class=body] .btn table {
            width: 100% !important;
        }
        table[class=body] .btn a {
            width: 100% !important;
        }
        table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
        }
        
        /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
                line-height: 100%;
        }
        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }
        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
        .btn-primary table td:hover {
            background-color: #34495e !important;
        }
        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
            }
        }
        
    </style>
    </head>
    <body class=''>
        <span class='preheader'>Gold Distributor Registration Activation</span>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body'>
        <tr>
        <td>&nbsp;</td>
        <td class='container'>
        <div class='content'>
        
        <!-- START CENTERED WHITE CONTAINER -->
        <table role='presentation' class='main'>
        
        <!-- START MAIN CONTENT AREA -->
        <tr>
        <td class='wrapper'>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
        <tr>
        <td>
        <p>Dear $fullname,</p>
        <p>Thank you for creating your Account</p>
        <p>Please click on the button below to activate your account.</p>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='btn btn-success'>
        <tbody>
        <tr>
        <td align='left'>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
        <tbody>
        <tr>
        <td> <a href='$activationLink' target='_blank'>ACTIVATE</a> </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <br><br>
        <p>Please ignore this message if your account have been previously activated.</p>
        <p>Yours sincerely,</p>
        <p>CODAC Team</p>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        
        <!-- END MAIN CONTENT AREA -->
        </table>
        <!-- END CENTERED WHITE CONTAINER -->
        
        <!-- START FOOTER -->
        <div class='footer'>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
        <tr>
        <td class='content-block'>
        <span class='apple-link'>Lagos, Nigeria</span>
        
        </td>
        </tr>
        <tr>
        <td class='content-block powered-by'>
        Powered by <a href='#'>CODAC.COM</a>.
        </td>
        </tr>
        </table>
        </div>
        <!-- END FOOTER -->
        
        </div>
        </td>
        <td>&nbsp;</td>
        </tr>
        </table>
    </body>
    </html>
    
    ";
    
    return $body;
    
    }



} // end of app controller
