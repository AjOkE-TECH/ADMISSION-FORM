<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
require 'mail/Exception.php';

function sendMail($userEmail, $userName)
{
    $mail = new PHPMailer(true);

    try {

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // GMAIL ADDRESS
        $mail->Username = 'sekinatmutolib48@gmail.com';

        // APP PASSWORD
        $mail->Password = 'ycxkpfgnnzufbxpl';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // SENDER
        $mail->setFrom(
            'sekinatmutolib48@gmail.com',
            'Student Portal'
        );

        // RECEIVER
        $mail->addAddress(
            $userEmail,
            $userName
        );

        // EMAIL FORMAT
        $mail->isHTML(true);

        $mail->Subject = 'Welcome to Student Portal';

        $mail->Body = "

        <h2>Welcome $userName</h2>

        <p>
            Your account has been created successfully.
        </p>

        <p>
            Thank you for registering with our
            Student Admission Management System.
        </p>

        ";

        $mail->send();

        return true;

    } catch (Exception $e) {

        echo '<h3>MAIL ERROR</h3>';

        echo '<pre>';
        echo $mail->ErrorInfo;
        echo '</pre>';

        return false;
    }
}
?>