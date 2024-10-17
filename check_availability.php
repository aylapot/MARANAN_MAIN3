<?php
// Dummy data for reserved dates
$reservedDates = ['2023-10-01', '2023-10-02', '2023-10-05']; // Add your reserved dates

$date = $_GET['date'];

$response = ['available' => !in_array($date, $reservedDates)];
header('Content-Type: application/json');
echo json_encode($response);
?>
