<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files 
require 'PHPMailer/PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer/PHPMailer.php'; 
require 'PHPMailer/PHPMailer/SMTP.php'; 

// Collect form data
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Validate form data
if (!empty($fullName) && !empty($email) && !empty($subject) && !empty($phone) && !empty($message)) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';           // Specify your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'standupstartups1@gmail.com'; // Your SMTP username
        $mail->Password = 'Standup@123';       // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('rohipancholi14510@gmail.com', 'Your Name'); // Sender
        $mail->addAddress('rohitpancholi14510@gmail.com', 'Recipient Name'); // Recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<p><strong>Full Name:</strong> {$fullName}</p>
                          <p><strong>Email:</strong> {$email}</p>
                          <p><strong>Phone:</strong> {$phone}</p>
                          <p><strong>Message:</strong> {$message}</p>";
        $mail->AltBody = "Full Name: {$fullName}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";

        $mail->send();
        echo 'Message has been sent successfully.';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    echo 'Please fill all the fields.';
}
?>
