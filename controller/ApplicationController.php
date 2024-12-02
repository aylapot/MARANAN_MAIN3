<?php

class ApplicationController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function createReservation($data) {
        try {
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $reservation_date = $data['reservation_date'];

            $sql = "INSERT INTO reservations_data(name, email, phone, reservation_date) VALUES (:name, :email, :phone, :reservation_date)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':reservation_date', $reservation_date);

            if ($stmt->execute()) {
                return ["status" => "success", "message" => "Reservation created successfully."];
            } 
        } catch (PDOException $e) {
            return ["Error: " . $e->getMessage()];
        }
}
public function getReservations() {
    $resp = $this->pdo->query("SELECT * FROM reservations_data");
    return $resp->fetchAll(PDO::FETCH_ASSOC);
}
}

class postallReservation {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function postAllReservations($query) {
        try {
            $response = $this->pdo->query("SeLECT * FROM reservations_data WHERE name LIKE '%$query%' OR email LIKE '%$query%' OR phone LIKE '%$query%' OR reservation_date LIKE '%$query%'");
            return $response->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["Error: " . $e->getMessage()];
        }
    }

}
