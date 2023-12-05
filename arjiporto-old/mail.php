<?php
$name = $POST['name'];
$email = $POST['email'];
$message = $POST['message'];

$to = "arji.maulana23@outlook.com";
$subject = "Mail from arjism.netlify.app";
$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@arjism.netlify.app" . "\r\n" . "CC : from client";
if ($email = !NULL) {
    mail($to, $subject, $txt, $headers);
}
return true;
