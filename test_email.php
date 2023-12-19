<?php

require_once("email_configration.php");
try {
   // Recipients
    $mail->setFrom('shop@domain.com', 'Your Name');
    $mail->addAddress('b.domain@gmail.com', 'Recipient Name'); // Replace with the recipient's email address

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
