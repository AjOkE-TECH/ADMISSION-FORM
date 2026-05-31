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

<div style='
width:100%;
background:#f4f4f4;
padding:30px 0;
font-family:Arial,sans-serif;
'>

    <div style='
    width:90%;
    max-width:600px;
    margin:auto;
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    '>

        <!-- HEADER -->

        <div style='
        background:indigo;
        color:white;
        text-align:center;
        padding:25px;
        '>

            <h1 style='margin:0;'>
                Student Portal
            </h1>

        </div>

        <!-- BODY -->

        <div style='padding:40px 30px;'>

            <h2 style='color:indigo; margin-bottom:15px;'>
                Welcome $userName
            </h2>

            <p style='
            color:#555;
            font-size:16px;
            line-height:1.7;
            '>

                Your account has been created successfully.

            </p>

            <p style='
            color:#555;
            font-size:16px;
            line-height:1.7;
            '>

                Thank you for registering with our
                Student Admission Management System.

            </p>

            <div style='margin-top:30px;'>

                <a href='#'
                style='
                background:indigo;
                color:white;
                text-decoration:none;
                padding:14px 25px;
                border-radius:8px;
                display:inline-block;
                '>

                    Visit Portal

                </a>

            </div>

        </div>

        <!-- FOOTER -->

        <div style='
        background:indigo;
        color:white;
        text-align:center;
        padding:18px;
        font-size:14px;
        '>

            © 2026 Student Portal | All Rights Reserved

        </div>

    </div>

</div>

";

        $mail->send();

        return true;

    }catch(Exception $e){

        return false;

    }

}
?>