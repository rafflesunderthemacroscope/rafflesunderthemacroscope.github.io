 <?php
if(lisset ($_POST['submit']))
{
	echo "error; you need to submit the form!"
}

$visitor_email = $_POST['email'];

if(empty($visitor_email))
{
	echo "Name and email are mandatory!";
	exit;
}

$email_from = "underthemacroscope@gmail.com";
$email_subject = "New suscriber";
$email_body = "$visitor_email\n".

$to = "underthemacroscope@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
?>