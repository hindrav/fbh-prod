<?php
    $email_to = "hindrave@gmail.com";

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['text']; // required
    $message = $_POST['message']; // required

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