<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting for debugging
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if form is submitted
if (isset($_POST["send"])) {
    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    // Ensure PHPMailer object is created successfully
    if ($mail) {
        // Enable debugging (change to 2 for more detailed output)
        //$mail->SMTPDebug = 2;

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'khloodhsa@gmail.com'; // Replace with your Gmail email
        $mail->Password = 'ekil arwu aqhh fmrb'; // Replace with your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient details
        $mail->setFrom('khloodhsa@gmail.com', 'SEEFLYER');
        $mail->addAddress($_POST["email"]);
        $mail->isHTML(true);

        // Email content
        $mail->Subject = $_POST["name"];
        $mail->Body = $_POST["message"];

        // Try to send the email
        try {
            $mail->send();
            echo "<script>alert('Sent Successfully');</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to create PHPMailer instance";
    }
}
