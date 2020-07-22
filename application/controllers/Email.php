<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        $this->load->helpers('url');
    }
    
        
    function sendMail($to, $from, $from_name, $subject, $body)
    {
        require_once(APPPATH.'librariesemail/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'codac.ng';
        $mail->Port = 465;  
        $mail->Username = 'noreply@codac.ng';
        $mail->Password = 'noreplyAdmin';   
   
       //   $path = 'reseller.pdf';
       //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="noreply@codac.ng";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $response ="Please try Later, Error Occured while Processing...";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit();
            return $response; 
        }
        else 
        {
            $response = "Thanks You !! Your email is sent.";  
            return $response;
        }
    }
    

}
