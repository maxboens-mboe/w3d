<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];

    $email_from = $email
    $email_subject = "New Form submission";
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

    $to = "weddingmaxlaura@gmail.com";
    $headers = "From: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);
?>