<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST['conName'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['conEmail'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['conPhone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['conSubject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['conMessage'] ?? ''));

    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kaverikamble1805@gmail.com';
        $mail->Password   = 'YOUR_GMAIL_APP_PASSWORD';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom('kaverikamble1805@gmail.com', 'SIDDEXA');

        // Receiver
        $mail->addAddress('kaverikamble1805@gmail.com', 'SIDDEXA');

        // Reply To
        $mail->addReplyTo($email, $name);

        // Logo
        $imagePath = __DIR__ . '/../assets/images/logo.png';

        if (file_exists($imagePath)) {
            $mail->addEmbeddedImage($imagePath, 'logoimg');
        }

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Enquiry";

        $mail->Body = "
        <div style='background:#f5f5f5;padding:30px;font-family:Arial,sans-serif;'>

            <div style='max-width:700px;margin:auto;background:#fff;border-radius:10px;overflow:hidden;'>

                <div style='background:#0d6efd;padding:25px;text-align:center;'>

                    <img src='cid:logoimg' width='170' alt='Logo'><br>

                    <h2 style='color:#fff;margin-top:10px;'>
                        New Contact Enquiry
                    </h2>

                </div>

                <div style='padding:25px;'>

                    <table width='100%' cellpadding='10' cellspacing='0' style='border-collapse:collapse;'>

                        <tr style='background:#f8f8f8;'>
                            <td><strong>Full Name</strong></td>
                            <td>{$name}</td>
                        </tr>

                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{$email}</td>
                        </tr>

                        <tr style='background:#f8f8f8;'>
                            <td><strong>Phone</strong></td>
                            <td>{$phone}</td>
                        </tr>

                        <tr>
                            <td><strong>Service</strong></td>
                            <td>{$subject}</td>
                        </tr>

                    </table>

                    <h3 style='margin-top:25px;'>Message</h3>

                    <div style='background:#f8f8f8;padding:15px;border-radius:5px;'>
                        {$message}
                    </div>

                </div>

                <div style='background:#0d6efd;color:#fff;text-align:center;padding:15px;'>
                    © " . date('Y') . " SIDDEXA
                </div>

            </div>

        </div>";

        $mail->send();

        echo "Y";
        exit;
    } catch (Exception $e) {

        echo "N";
        exit;
    }
}