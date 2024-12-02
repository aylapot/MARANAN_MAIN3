<?php
// Database configuration
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'reservations';
$tableUser = 'users'; // Update with your actual table name
$user_dashboard = 'dashboard.php';
$loginPage = 'login.php';

// Create a connection
$con = mysqli_connect($host, $db_user, $db_password, $db_name);

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
