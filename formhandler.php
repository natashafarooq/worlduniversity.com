<?php
$name=$_POST['name'];
$visitor_email=$_POST['e-mail'];
$subject=$_POST['subject'];
$message=$_POST['message'];




$email_from='info@yourwebsite.com';
$email_subject='New submission  form';
$email_body="username : $name.\n".
"user-email : $visitor_email.\n".
"subject : $subject.\n".
"message : $message.\n".
$to ='natashafarooq345@gmail.com';
$headers="form:$email_from\r\n";
$headers="Reply-To:$email_from\r\n";

e-mail($to,$email_subject,$email_body,$headers);
header("location:contact-us.html");



?>