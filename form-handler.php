<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject=$_POST['subject'];
$Message = $_POST['Message'];

$email_from = 'lencholachisa11@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "subject: $subject.\n".
                "sUser Message: $Message.\n";

$to = 'lincholachisa42@gmail.com';
$headers = "From: $email_form \r\n";
$headers . = "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("location: contactPage.html");


?>