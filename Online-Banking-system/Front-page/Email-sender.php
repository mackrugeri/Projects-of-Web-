<?php 

	require_once('PHPMailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth  = true;
	$mail ->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->username = 'chughtai846@gmail.com';
	$mail->Password = 'AHSANhaseeb123';

	$mail->SetFrom('no-reply@howcode.org');
	$mail->subject = 'Hello World';
	$mail ->Body = 'A test email';
	$mail->AddAddress('ahsanchughtai846@gmail.com');
	$mail->Send();
 ?>