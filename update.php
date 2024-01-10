<?php
// Maak verbinding met de database
$servername = "jouw_servernaam"; // Vervang met je eigen servernaam
$username = "jouw_gebruikersnaam"; // Vervang met je eigen gebruikersnaam
$password = "jouw_wachtwoord"; // Vervang met je eigen wachtwoord
$dbname = "Winkel"; // Vervang met de naam van je database

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

// Verwerk het formulier
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingevoerde gegevens
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    // Update query voor het tweede product (gebaseerd op product_code)
    $sql = "UPDATE product SET product_naam = ?, prijs_per_stuk = ?, omschrijving = ? WHERE product_code = 2";

    // Voorbereid statement
    $stmt = $conn->prepare($sql);

    // Bind de parameters
    $stmt->bind_param("sds", $product_naam, $prijs_per_stuk, $omschrijving);

    // Voer de query uit
    $stmt->execute();

    // Sluit het statement
    $stmt->close();

    // Geef een bericht weer dat de update is gelukt
    echo "Productinformatie bijgewerkt!";
}

// Sluit de databaseverbinding
$conn->close();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productinformatie bijwerken</title>
</head>
<body>
    <h2>Bijwerken van Productinformatie</h2>

    <!-- Formulier voor het bijwerken van productinformatie -->
    <form method="POST" action="">
        <label for="product_naam">Product Naam:</label>
        <input type="text" name="product_naam" required><br>

        <label for="prijs_per_stuk">Prijs per Stuk:</label>
        <input type="number" name="prijs_per_stuk" step="0.01" required><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" rows="4" required></textarea><br>

        <input type="submit" value="Bijwerken">
    </form>
</body>
</html>
