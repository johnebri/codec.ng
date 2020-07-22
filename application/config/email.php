<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'codac.ng', 
    'smtp_port' => 465,
    'smtp_user' => 'noreply@codac.ng',
    'smtp_pass' => 'noreplyAdmin',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '10', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);

    //     $mail = new PHPMailer();
    //     $mail->IsSMTP();
    //     $mail->SMTPAuth = true; 
 
    //     $mail->SMTPSecure = 'ssl'; 
    //     $mail->Host = 'codac.pulaakutrade.com';
    //     $mail->Port = 465;  
    //     $mail->Username = 'codac@pulaakutrade.com';
    //     $mail->Password = 'CodacTestMail123';   
   
    //   //   $path = 'reseller.pdf';
    //   //   $mail->AddAttachment($path);
   
    //     $mail->IsHTML(true);
    //     $mail->From="codac@pulaakutrade.com";
    //     $mail->FromName=$from_name;
    //     $mail->Sender=$from;
    //     $mail->AddReplyTo($from, $from_name);
    //     $mail->Subject = $subject;
    //     $mail->Body = $body;
    //     $mail->AddAddress($to);
