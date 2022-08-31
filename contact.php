<?php
if(isset($_POST['submit'])){
    $to = "hindrave@gmail.com"
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['text'];
    $message = $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header("Location: index.html");
    }
?>
