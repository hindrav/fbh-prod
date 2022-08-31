<?php
    $email_to = "hindrave@gmail.com";

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['text']; // required
    $message = $_POST['message']; // required
    
    //Creating mail headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $subject, $email_message, $headers);
?>