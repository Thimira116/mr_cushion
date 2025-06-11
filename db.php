<?php
$host = "sql313.infinityfree.com";
$dbname = "if0_39200379_mr_cushion";
$username = "if0_39200379";
$password = "Mrcushion116";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
