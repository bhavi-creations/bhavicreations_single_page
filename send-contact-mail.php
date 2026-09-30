<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}


/* =========================
   GET FORM DATA
========================= */

$full_name = trim($_POST['full_name'] ?? '');
$business_name = trim($_POST['business_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$project_type = trim($_POST['project_type'] ?? '');
$message = trim($_POST['message'] ?? '');


/* =========================
   VALIDATION
========================= */

if (
    empty($full_name) ||
    empty($email) ||
    empty($phone) ||
    empty($project_type) ||
    empty($message)
) {
    header("Location: index.php?mail=empty#contact");
    exit();
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?mail=invalid#contact");
    exit();
}


/* =========================
   SECURITY
========================= */

$full_name = htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8');
$business_name = htmlspecialchars($business_name, ENT_QUOTES, 'UTF-8');
$email_safe = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$project_type = htmlspecialchars($project_type, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');


/* =========================
   YOUR EMAIL
========================= */

$to = "hello@bhavicreations.com";

$subject = "New Website Enquiry - " . $full_name;


/* =========================
   EMAIL BODY
========================= */

$email_body = "
<html>

<head>
<meta charset='UTF-8'>

<style>

body {
    font-family: Arial, sans-serif;
    background: #f4f6fa;
    padding: 30px;
    color: #111827;
}

.email-container {
    max-width: 650px;
    margin: auto;
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
}

.email-header {
    background: #071021;
    color: #ffffff;
    padding: 25px 30px;
}

.email-header h2 {
    margin: 0;
    font-size: 24px;
}

.email-header p {
    margin: 8px 0 0;
    color: #aab7cd;
}

.email-content {
    padding: 30px;
}

.info-row {
    margin-bottom: 18px;
}

.info-label {
    display: block;
    font-size: 12px;
    font-weight: bold;
    color: #2563eb;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.info-value {
    font-size: 16px;
    color: #111827;
}

.message-box {
    background: #f4f7ff;
    border-left: 4px solid #2563eb;
    padding: 18px;
    border-radius: 8px;
    line-height: 1.6;
}

.email-footer {
    background: #f8fafc;
    padding: 18px 30px;
    color: #6b7280;
    font-size: 13px;
}

</style>

</head>

<body>

<div class='email-container'>

    <div class='email-header'>

        <h2>New Website Enquiry</h2>

        <p>
            A new enquiry was submitted through the
            Bhavi Creations website.
        </p>

    </div>


    <div class='email-content'>

        <div class='info-row'>

            <span class='info-label'>
                Full Name
            </span>

            <div class='info-value'>
                {$full_name}
            </div>

        </div>


        <div class='info-row'>

            <span class='info-label'>
                Business Name
            </span>

            <div class='info-value'>
                " . (!empty($business_name) ? $business_name : "Not Provided") . "
            </div>

        </div>


        <div class='info-row'>

            <span class='info-label'>
                Email
            </span>

            <div class='info-value'>
                {$email_safe}
            </div>

        </div>


        <div class='info-row'>

            <span class='info-label'>
                Phone Number
            </span>

            <div class='info-value'>
                {$phone}
            </div>

        </div>


        <div class='info-row'>

            <span class='info-label'>
                Project Type
            </span>

            <div class='info-value'>
                {$project_type}
            </div>

        </div>


        <div class='info-row'>

            <span class='info-label'>
                Project Details
            </span>

            <div class='message-box'>
                " . nl2br($message) . "
            </div>

        </div>

    </div>


    <div class='email-footer'>

        Submitted from Bhavi Creations website contact form.

    </div>

</div>

</body>

</html>
";


/* =========================
   MAIL HEADERS
========================= */

$headers = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$headers .= "From: Bhavi Creations Website <hello@bhavicreations.com>\r\n";

$headers .= "Reply-To: {$email}\r\n";


/* =========================
   SEND EMAIL
========================= */

if (mail($to, $subject, $email_body, $headers)) {

    header("Location: index.php?mail=success#contact");

} else {

    header("Location: index.php?mail=failed#contact");

}

exit();

?>