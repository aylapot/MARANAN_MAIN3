<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer

$locker = 1;
include_once("./config/db.php");

// Start the session
session_start();

// Check if session is already active
if (isset($_SESSION['user_id'])) {
    header("Location: $user_dashboard");
    exit();
}

// Handle the login form submission
if (isset($_POST['login'])) {

    $errorMsg = "";

    // Secure form data using mysqli_real_escape_string
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (!empty($email) && !empty($password)) {

        // Query to check if the email exists in the database
        $query = "SELECT * FROM $tableUser WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        // If email exists, verify the password
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $row['password'])) {
                // Check if email is verified
                if ($row['is_verified'] == 0) {
                    // Send verification email with code
                    $verification_code = rand(100000, 999999); // Generate 6 digit verification code

                    // Store verification code in database
                    $update_query = "UPDATE $tableUser SET verification_code = '$verification_code' WHERE email = '$email'";
                    mysqli_query($con, $update_query);

                    // Send the verification email
                    sendVerificationEmail($email, $verification_code);

                    $errorMsg = "Please check your email for the verification code to complete the login.";
                } else {
                    // Set session and redirect to dashboard
                    $_SESSION['user_id'] = $row['user_id'];
                    header("Location: $user_dashboard");
                    exit();
                }
            } else {
                $errorMsg = "Email or Password is invalid";
            }
        } else {
            $errorMsg = "No user found";
        }
    } else {
        $errorMsg = "Email and Password cannot be empty";
    }
}

// Send verification email using PHPMailer
function sendVerificationEmail($email, $verification_code) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Set the SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your-email@example.com'; // SMTP username
        $mail->Password   = 'your-email-password'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('your-email@example.com', 'Your Company');
        $mail->addAddress($email); // Add recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Verification Code';
        $mail->Body    = "Your verification code is <strong>$verification_code</strong>. Please enter this code to complete your login.";

        // Send the email
        $mail->send();
    } catch (Exception $e) {
        // If the email fails to send
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <?php
                if (isset($errorMsg)) {
                    echo "
                    <div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        $errorMsg
                    </div>
                    ";
                }
                ?>
                <h1 class="text-center mb-5">Login</h1>
                <form action="" method="post" class="row g-3">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="marananresort@gmail.com" required>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control" id="validationCustom01" placeholder="******" minlength="6" required>
                    </div>

                    <?php
                    // If the email is not verified, ask for the verification code
                    if (isset($_POST['login']) && !isset($errorMsg)) {
                        echo "
                        <div class='col-md-12'>
                            <label for='verification_code' class='form-label'>Verification Code:</label>
                            <input type='text' name='verification_code' class='form-control' id='verification_code' placeholder='Enter verification code' required>
                        </div>
                        ";
                    }
                    ?>

                    <p>Don't have account? <a href="<?php echo $registerPage ?>">Register</a></p>
                    <div class="col-12 text-center">
                        <input class="btn btn-primary" type="submit" name="login" value="Login">
                    </div>
                    <!-- Forgot password link -->
                    <div class="col-md-12 text-end">
                        <a href="reset_password.php" class="text-primary">Forgot Password? Reset Password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
