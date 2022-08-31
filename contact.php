<?php
if(isset($_POST['submit'])){
    $to = "hindrave@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['text'];
    $message = $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header("Location: index.html");
    }
?>