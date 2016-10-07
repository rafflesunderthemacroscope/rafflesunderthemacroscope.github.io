<?php
if(lisset ($_POST['submit']))
{
	echo "error; you need to submit the form!"
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message  = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
	echo "Name and email are mandatory!";
	exit;
}

$email_from = 'underthemacroscope@gmail.com';
$email_subject = "New email";
$email_body = "You have received a new message from $name";
$to