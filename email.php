<?php
$subject = 'Your website: Heavico'; // Subject of your email
$to = 'help@themicart.com';  // Enter recipient's E-mail address
$emailTo = $_REQUEST['email'];

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: " . $emailTo . "\r\n"; // Sender's E-mail
$headers .= "Return-Path:". $emailTo;

$body = 'You have received a new inquiry!' . "\n\n";
$body .= 'Name: ' . $_REQUEST['name'] . "\n";
$body .= 'Email: ' . $_REQUEST['email'] . "\n";
$body .= 'Phone: ' . $_REQUEST['phone'] . "\n\n";
$body .= 'Message: ' . $_REQUEST['message'];

if (@mail($to, $subject, $body, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>
