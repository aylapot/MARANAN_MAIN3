<?php

header('cONTENT-Type: application/json');
header('Access-Control-Allow-Origin: *');

require __DIR__.'/../controller/ApplicationController.php';
require_once __DIR__.'/db.php';
require_once 'ApplicationController.php';
require_once 'postallReservation.php';

$applicationController = new ApplicationController($pdo);
    $postAllReservation = new postallReservation($pdo);


$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'create_reservation':
            $data = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'phone' => $_POST['phone'] ?? '',
                'reservation_date' => $_POST['reservation_date'] ?? '',
            ];
            $response = $applicationController->createReservation($data);
            echo json_encode($response);
            break;

        default:
            echo json_encode(["status" => "error", "message" => "Invalid action."]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? '';

    switch ($action) {
        case 'get_reservations':
            $response = $applicationController->getReservations();
            echo json_encode($response);
            break;

        case 'search_reservations':
            $query = $_GET['query'] ?? '';
            $response = $postAllReservation->postAllReservations($query);
            echo json_encode($response);
            break;

        default:
            echo json_encode(["status" => "error", "message" => "Invalid action."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>