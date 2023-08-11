<?php
// composer require phpmailer/phpmailer
// --------------------------- PHP INAANZA HAPA -----------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debugging (set to 2 for more detailed logs)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // SMTP server of Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your Gmail email address
    $mail->Password = 'your_gmail_password';  // Your Gmail password or app password if you have two-factor authentication enabled
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;  // TCP port to connect to

    //Recipients
    $mail->setFrom('your_email@gmail.com', 'Your Name');  // Sender's email and name
    $mail->addAddress('recipient@example.com', 'Recipient Name');  // Recipient's email and name
    $mail->addReplyTo('your_email@gmail.com', 'Your Name');  // Reply-to email and name (optional)

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Test Email from PHPMailer';  // Email subject
    $mail->Body = '<h1>Hello, this is a test email sent from PHPMailer!</h1>';  // Email content (HTML)

    // Attachments (optional)
    //$mail->addAttachment('path/to/file.pdf', 'File.pdf'); // Add attachment

    $mail->send();
    echo 'Message has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

