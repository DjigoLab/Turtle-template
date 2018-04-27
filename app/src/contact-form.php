<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_to = 'djigolab@gmail.com';
$email_to_subject = 'New message from Tortuga';
$email_to_body = "Name: $name \n" .
    "Email : $email \n" .
    "Message: $message \n";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
mail($email_to, $email_to_subject, $email_to_body);
}
header("../../index.html");