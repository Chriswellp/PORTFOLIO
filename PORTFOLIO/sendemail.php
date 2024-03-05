<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'peyarachris@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'jjjbdwpefmpsblub'; // Replace with your Gmail password or app-specific password

        $mail->setFrom($email, $name);
        $mail->addAddress('peyarachris@gmail.com'); // Replace with your Gmail address
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
            <html>
            <body>
                <h2>New Message from Contact Form</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong></p>
                <p>$message</p>
            </body>
            </html>
        ";
        $mail->send();

        echo "
        <script>
            alert('Sent Successfully');
            document.location.href = 'Chriswell.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>