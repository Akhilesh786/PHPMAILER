<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.medhajastro.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'shop@medhajastro.com';
    $mail->Password   = 'Medhaj@12345!'; // Change accordingly
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 25;

    // Recipients
    $mail->setFrom('shop@medhajastro.com', 'Your Name');
    $mail->addAddress('b.akhileshverma@gmail.com', 'Recipient Name'); // Replace with the recipient's email address

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email sent from PHP using PHPMailer.';

    $mail->send();
    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo 'Failed to send email. Error: ', $mail->ErrorInfo;
}
?>
