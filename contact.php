<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$to = 'hindrave@gmail.com';

mail($to, $subject, utf8_decode($msg), $header);

header("Location:index.html");
?>