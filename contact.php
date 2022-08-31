<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$message = "Saludos Staff de Lucsax. \n\n Mi nombre es:  " . $name . ", los contacto a través de su plataforma en línea lucsax.net. \r\n\n";
$message .= $_POST['msg'] . " \r\n\n";
$message .= "\n Date message: " . date('d/m/Y', time());

$to = 'hindrave@gmail.com';

mail($to, $subject, utf8_decode($message), $header);

header("Location:index.html");
?>