<?php
require_once "config.php";
require "./application/third_party/PHPMailer/class.phpmailer.php";
require './application/third_party/PHPMailer/class.smtp.php';

$mail = new PHPMailer ();

$mail->IsSMTP (); 
$mail->SMTPDebug = 1;
$mail->Mailer = "smtp";
$mail->SMTPAuth = true; 

//local
/**
$mail->Host = "localhost"; 
$mail->Port = "25"; 
$mail->Username = "kpbaek";
$mail->Password = "1111";
$mail->SetFrom ( 'kpbaek@localhost' ); 
$mail->AddAddress ( "tester1@localhost", "SBM" );
*/

$mail->Host = TRD_SMTP_HOST; 
$mail->Port = TRD_SMTP_PORT; 
$mail->Username = TRD_SMTP_USER;
$mail->Password = TRD_SMTP_PASS;
$mail->SetFrom ( TRD_PUB_EMAIL ); 
$mail->Priority = 1;
$mail->AddAddress ( TRD_PUB_EMAIL, "SBM" );


$mail->Subject = "Message from  Contact form";
$mail->Body = "test";
$mail->WordWrap = 50;

if (! $mail->Send ()) {
	echo 'Message was not sent.';
	echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent.';
}
?>            