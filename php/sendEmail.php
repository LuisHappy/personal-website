<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../vendor/autoload.php';

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "luiswebsite12@gmail.com";
	$mail->Password = "ilov3mom";
	$mail->SetFrom($_POST['email']);
	$mail->Subject = $_POST['subject'];
	$mail->Body = "This message is from: " . $_POST['email'] . "</br>" . $_POST['message'];
	$mail->AddAddress("luishappy@outlook.com");

	if(!$mail->Send()) {
		echo "false";
	} else {
		echo "true";
	}
?>