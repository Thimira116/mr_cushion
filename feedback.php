<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mr_cushion";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Correctly receive form inputs
$name   = $_POST['name'] ?? '';
$feedback = $_POST['feedback'] ?? '';
$rating = $_POST['rating'] ?? '';
$imagePath = null;

// Handle image upload
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $uploadDir . time() . "_" . $fileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }
}

// Insert feedback — use the correct variables
$stmt = $conn->prepare("INSERT INTO feedbacks (name, feedback, rating, image) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $feedback, $rating, $imagePath);

if ($stmt->execute()) {
    header("Location: index.php?success=1");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
