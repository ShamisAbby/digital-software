<?php

$host = 'localhost';
$dbname = 'digital_software';
$username = 'root';
$password = '';

try {
   
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // (optional but recommended)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
