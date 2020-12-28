<?php

//VARIABLES
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$subject = $_POST['subject'];
$budget = $_POST['budget'];


// IMPORT PHPmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// AUTOLOADER Z COMPOSERA
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //HODNOTY
    $mail->setFrom($email, $name);
    $mail->addAddress('welted@welted.site', 'WELTED');     // prijímateľ

    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  // HTML formát pre mail
    $mail->Subject = $subject . " - " . $budget;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    header("location: thankyou.php");   // after succesful send
} catch (Exception $e) {
    echo "Správa nebola odoslaná. Error: {$mail->ErrorInfo}";  // after unsuccesful send
}