<?php
// dbconn.php

$host = "localhost";
$dbname = "jouw_database_naam";
$user = "jouw_gebruikersnaam";
$pass = "jouw_wachtwoord";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
