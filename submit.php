<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);

    // Database connection details
    $servername = "localhost"; // or your server name
    $username = "root"; // replace with your MySQL username
    $password = ""; // replace with your MySQL password
    $dbname = "reservations"; // the name of your database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind;
    $stmt = $conn->prepare("INSERT INTO reservations_data (name, email, phone, reservation_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $date);

    // Execute the statement
    if ($stmt->execute()) {
        // Display a confirmation message
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Reservation Confirmation</title>
            <link rel='stylesheet' href='styles.css'>
        </head>
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
            color: #4CAF50; /* Green color */
        }
        p {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #ffffff;
            background-color: #4CAF50; /* Green color */
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        </style>
        <body>
            <div class='container'>
                <div class='confirmation-box'>
                    <h1>Reservation Successful</h1>
                    <p>Thank you, <strong>$name</strong>!</p>
                    <p>Your reservation for <strong>$date</strong> has been successfully submitted.</p>
                    <p>We will contact you at <strong>$email</strong> for further details.</p>
                    <a href='guest.php'>Back to Home</a>
                </div>
            </div>
        </body>
        </html>";
    } else {
        echo "Error: " . $stmt->error;
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
