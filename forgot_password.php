<?php
include_once("./config/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

// Function to generate a secure token
function generate_token() {
    return bin2hex(random_bytes(32)); // Generate a 64-character hex token
}

// Function to send the reset email
function send_reset_email($email, $token) {
    $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.yourserver.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@example.com'; // Your email username
        $mail->Password = 'your_email_password'; // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('noreply@yourwebsite.com', 'Your Website');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body    = "To reset your password, click on the following link: <a href='$reset_link'>$reset_link</a>";
        $mail->AltBody = "To reset your password, visit the following link: $reset_link";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Handle password reset request
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Generate reset token and expiry (1 hour from now)
        $token = generate_token();
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Update user with reset token and expiry
        $update_query = "UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?";
        $update_stmt = $con->prepare($update_query);
        $update_stmt->bind_param('sss', $token, $expiry, $email);
        $update_stmt->execute();

        // Send the reset link via email
        send_reset_email($email, $token);

        echo "Password reset link has been sent to your email.";
    } else {
        echo "No account found with that email address.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Forgot Password</h2>
        <form method="post" action="forgot_password.php">
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
    