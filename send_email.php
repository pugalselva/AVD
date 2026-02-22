<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Prevent any unexpected output from breaking JSON response
ob_start();

header('Content-Type: application/json');

// Enable error reporting for debugging (Remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Get and Sanitize Input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $product = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // 2. Validation
    if (empty($name) || empty($phone) || empty($message)) {
        ob_clean();
        echo json_encode(['status' => 'error', 'message' => 'Required fields missing.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';                       // [Change this if using another host]
        $mail->SMTPAuth = true;
        $mail->Username = 'pugalselvan04@gmail.com';                 // [Your Email Address]
        $mail->Password = 'fcfr gcan wonk kpzl';                    // [Your Gmail App Password]
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('webmaster@avd-industrial-traders.com', 'AVD Industrial Website');
        $mail->addAddress('pugalselvan04@gmail.com');               // Recipient
        $mail->addReplyTo($email ?: 'no-reply@avd-industrial-traders.com', $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Inquiry from AVD Industrial Traders - " . $name;

        $email_content = "You have received a new message from your website contact form.\n\n";
        $email_content .= "Name: $name\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Email: " . ($email ?: 'Not provided') . "\n";
        $email_content .= "Product Interest: " . ($product ?: 'Not specified') . "\n\n";
        $email_content .= "Message:\n$message\n";

        $mail->Body = $email_content;

        $mail->send();
        ob_clean();
        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully via SMTP!']);
    } catch (Exception $e) {
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
        ob_clean();
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    ob_clean();
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>