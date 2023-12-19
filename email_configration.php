<?php 

  // Server settings
  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php'; // Include the PHPMailer autoloader
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);


  $mail->isSMTP();
  $mail->Host       = 'mail.domain.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'shop@domain.com';
  $mail->Password   = 'domain@12345!'; // Change accordingly
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 25;
?>