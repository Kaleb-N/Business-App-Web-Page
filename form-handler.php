<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New Request';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Phone: $phone.\n".
                "User Message: $message.\n";

$to = 'calebnwachuks@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>