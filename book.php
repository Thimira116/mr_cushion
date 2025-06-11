<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $note = $_POST['note'];

    $sql = "INSERT INTO bookings (full_name, phone, email, service, preferred_date, note)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullName, $phone, $email, $service, $date, $note]);

    echo "<script>alert('Booking submitted successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Invalid request.";
}
?>
