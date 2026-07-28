<?php
$host = 'localhost';
$dbname = 'jnnwdsaahs';
$username = 'jnnwdsaahs';
$password = 'G54jU2s32B';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    // echo 'Connection failed: ' . $e->getMessage();
    $conn = null;
}
?>
