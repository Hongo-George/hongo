
<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'hongog93@gmail.com';

	$email_subject = "New e-mail From Your Website Contact Form";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					 "User Subject: $subject.\n".
					  "User Message: $message.\n";

	$to = "hongogeorge2@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

	$message_sent = true;

?>
