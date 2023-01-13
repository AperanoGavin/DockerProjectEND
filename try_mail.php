<?php
require 'path/to/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->Port = 25;

$mail->setFrom('audesandrine6@gmail.com', 'Sender Name');
$mail->addAddress('audesandrine6@icloud.com', 'Receiver Name');
$mail->Subject = 'Test email using PHPMailer';
$mail->Body = 'This is a test email sent using PHPMailer.';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>