<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

// Set the parameters for your mail server (SMTP server, username, password, etc.)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'sender@gmail.com';
$mail->Password = 'password';
$mail->SMTPSecure = 'ssl';  // Use 'tls' or 'ssl' depending on your SMTP server
$mail->Port = 465;  // Use the appropriate port for your SMTP server

// Set the sender information
$mail->setFrom('sender@gmail.com', 'phpMailer');
// $mail->addReplyTo('your_email@example.com', 'Your Name');

// Loop through your recipient list and send the emails
$recipients = ['first@gmail.com', 'second@gmail.com', .../* Add more email addresses here */];

foreach ($recipients as $recipient) {
    $mail->addAddress($recipient);

    // Set the email subject and message
    $mail->Subject = 'Bulk mail, Just ignore it';
    $mail->Body = 'Your email content goes here. You can use HTML for rich text emails.';

    // Send the email
    if (!$mail->send()) {
        echo 'Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Email sent to ' . $recipient . '<br>';
    }

    // Clear recipient list for the next email
    $mail->clearAddresses();
}
?>
