<?php
    $email_to = "hindrave@gmail.com";

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['text']; // required
    $message = $_POST['message']; // required
    $error_message = "";//
    //Verifying email
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   if(!preg_match($email_exp,$email_from)) {
     $error_message .= 'Wrong email direction, please try again.<br />';
   }
   //Verifying strings
   $string_exp = "/^[A-Za-z .'-]+$/";
   if(!preg_match($string_exp,$affair)) {
     $error_message .= 'Invalid subject format<br />';
   }
   if(!preg_match($string_exp,$name)) {
     $error_message .= 'Invalid name format<br />';
   }
   if(strlen($message) < 2) {
     $error_message .= 'Invalid text format.<br />';
   }
   if(strlen($error_message) > 0) {
     die($error_message);
   }
   //Body message
   $email_message = "Content msg.\n\n";
   function clean_string($string) {
     $bad = array("content-type","bcc:","to:","cc:","href");
     return str_replace($bad,"",$string);
   }
   $email_message .= "Name: ".clean_string($name)."\n";
   $email_message .= "Email: ".clean_string($email_from)."\n";
   $email_message = "Subject: ".clean_string($subject)."\n";
   $email_message .= "Message: ".clean_string($message)."\n";
    //Creating mail headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $subject, $email_message, $headers);
?>