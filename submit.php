<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES, 'UTF-8');

    // Database connection details
    $servername = "localhost"; // Change if necessary
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "reservations"; // The name of your database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO reservations_data (name, email, phone, reservation_date) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $phone, $date);

    // Execute the statement
    if ($stmt->execute()) {
        // Use htmlspecialchars for output to prevent XSS
        $escaped_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $escaped_date = htmlspecialchars($date, ENT_QUOTES, 'UTF-8');
        $escaped_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // Display a confirmation message
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Reservation Confirmation</title>
            <link rel='stylesheet' href='styles.css'>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f7f9fc;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .confirmation-box {
                    background-color: #ffffff;
                    border-radius: 8px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    max-width: 400px;
                    text-align: center;
                }
                h1 {
                    color: #4CAF50;
                }
                p {
                    margin: 10px 0;
                }
                a {
                    text-decoration: none;
                    color: #ffffff;
                    background-color: #4CAF50;
                    padding: 10px 15px;
                    border-radius: 5px;
                    transition: background-color 0.3s;
                }
                a:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='confirmation-box'>
                    <h1>Reservation Successful</h1>
                    <p>Thank you, <strong>$escaped_name</strong>!</p>
                    <p>Your reservation for <strong>$escaped_date</strong> has been successfully submitted.</p>
                    <p>We will contact you at <strong>$escaped_email</strong> for further details.</p>
                    <a href='guest.php'>Back to Home</a>
                </div>
            </div>
        </body>
        </html>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close connections
    $stmt->close();
    $conn->close();
} else {
    // Redirect to form if accessed directly
    header("Location: guest.php");
    exit();
}
?>
