<?php

if(isset($_POST['email'])) {

    $email_to = "tinashemgondwa@gmail.com";
    $email_from = $_POST['email'];
    $email_subject = $_POST['name'];
    $email_message = $_POST['message'];

    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);
?>