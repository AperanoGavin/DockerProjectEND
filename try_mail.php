<?php
$to = 'audesandrine6@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email';
$headers = 'From: sender@example.com';

mail($to, $subject, $message, $headers);