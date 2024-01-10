<?php
include_once "dbconn.php";

// Verbinding maken met de database
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database $dbname.";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Verwijder het product met de opgegeven product_code
if (isset($_GET['product_code'])) {
    $product_code = $_GET['product_code'];

    $stmt = $pdo->prepare("DELETE FROM producten WHERE product_code = ?");
    $stmt->execute([$product_code]);

    echo "Product met product_code $product_code is verwijderd.";
} else {
    echo "Geen product_code opgegeven om te verwijderen.";
}
?>
