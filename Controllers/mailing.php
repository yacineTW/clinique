<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("C:/xampp/htdocs/web2A/vendor/autoload.php");

function sendMail($to, $subject, $body) {
    $mail = new PHPMailer(true); // Create a new PHPMailer instance

    try {
        // Server settings
        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = 'sandbox.smtp.mailtrap.io';                 // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                           // Enable SMTP authentication
        $mail->Username = '309d03533e258c';       // SMTP username
        $mail->Password = 'ab36f6957a8b8d';       // SMTP password
        $mail->SMTPSecure = 'tls';                        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                // TCP port to connect to

        // Recipients
        $mail->setFrom('yacine@esprit.tn', 'Yacine');    // Sender's email and name
        $mail->addAddress($to);                           // Add a recipient

        // Content
        $mail->isHTML(true);                              // Set email format to HTML
        $mail->Subject = $subject;                        // Set the subject
        $mail->Body    = $body;                          // Set the email body
        $mail->AltBody = strip_tags($body);               // Set an alternative body for non-HTML clients

        $mail->send();                                    // Send the email
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Usage example
?>