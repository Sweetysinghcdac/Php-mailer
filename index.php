<?php
$to = "recipient@example.com"; // Replace with the recipient's email address
$subject = "Test Email";
$message = "This is a test email sent via GoDaddy's SMTP server using the mail() function in PHP.";

$headers = "From: your-email@example.com"; // Replace with your GoDaddy email address

$smtpServer = "smtpout.secureserver.net"; // GoDaddy's SMTP server
$smtpPort = 587; // Port number may vary

// Set the additional parameters to specify the SMTP server and port
$additional_parameters = "-f your-email@example.com";

if (mail($to, $subject, $message, $headers, $additional_parameters)) {
    echo "Email sent successfully!";
} else {
    echo "Email could not be sent.";
}
?>