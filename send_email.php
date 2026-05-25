<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
require 'mail/Exception.php';

function sendMail($userEmail, $userName){

    $mail = new PHPMailer(true);

    try{

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // YOUR GMAIL
        $mail->Username   = 'sekinatmutolib48@gmail.com';

        // APP PASSWORD
        $mail->Password   = 'cfhuhgkotqlroimg';

        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // SENDER
        $mail->setFrom('sekinatmutolib48@gmail.com', 'Student Portal');

        // RECEIVER
        $mail->addAddress($userEmail, $userName);

        // EMAIL CONTENT
        $mail->isHTML(true);

        $mail->Subject = 'Welcome to Student Portal';

        $mail->Body = "
        <h2>Welcome $userName</h2>
        <p>Your account was created successfully.</p>
        <p>Thank you for registering.</p>
        ";

        $mail->send();

        return true;

    }catch(Exception $e){

        return false;

    }

}
?>