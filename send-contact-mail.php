<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project structure

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize and assign POST data matching HTML form inputs
    $fullName     = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $businessName = htmlspecialchars(trim($_POST['business_name'] ?? 'N/A'));
    $email        = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone        = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $projectType  = htmlspecialchars(trim($_POST['project_type'] ?? 'Not Specified'));
    $message      = nl2br(htmlspecialchars(trim($_POST['message'] ?? '')));

    // Basic Validation
    if (empty($fullName) || empty($email) || empty($phone) || empty($message)) {
        echo '<script>alert("Please fill in all required fields."); window.history.back();</script>';
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'appledentalclinic2025@gmail.com'; // Gmail address
        $mail->Password   = 'ixdpuydufjsfxaxb'; // App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('appledentalclinic2025@gmail.com', 'Apple Dental Specialities');
        $mail->addAddress('appledentalclinic2025@gmail.com', 'Apple Dental Specialities');
        $mail->addReplyTo($email, $fullName); // Allows direct reply to the sender

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission - ' . $fullName;
        
        // Styled HTML Body
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px;'>
                <h2 style='background: #f4f4f4; padding: 10px 15px; border-left: 4px solid #007bff; margin-top: 0;'>
                    New Website Inquiry
                </h2>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr>
                        <td style='padding: 8px 0; font-weight: bold; width: 140px;'>Full Name:</td>
                        <td style='padding: 8px 0;'>{$fullName}</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px 0; font-weight: bold;'>Business Name:</td>
                        <td style='padding: 8px 0;'>{$businessName}</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px 0; font-weight: bold;'>Email Address:</td>
                        <td style='padding: 8px 0;'><a href='mailto:{$email}'>{$email}</a></td>
                    </tr>
                    <tr>
                        <td style='padding: 8px 0; font-weight: bold;'>Phone Number:</td>
                        <td style='padding: 8px 0;'>{$phone}</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px 0; font-weight: bold;'>Project Type:</td>
                        <td style='padding: 8px 0;'>{$projectType}</td>
                    </tr>
                </table>
                
                <h3 style='margin-top: 20px; border-bottom: 1px solid #ddd; padding-bottom: 5px;'>Project Details / Message:</h3>
                <p style='background: #f9f9f9; padding: 12px; border-radius: 4px;'>{$message}</p>
            </div>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent successfully.\\n\\nPlease click OK."); window.location.href="index.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // Access direct ga avvakundaa protection
    echo 'Access Denied';
}
?>