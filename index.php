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

// Selecteer alle data uit de tabel producten
$stmt = $pdo->query("SELECT * FROM producten ORDER BY product_code");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Toon de data op een mooie manier
echo "<h2>Producten</h2>";
echo "<table border='1'>
        <tr>
            <th>Product Code</th>
            <th>Product Naam</th>
            <th>Prijs</th>
        </tr>";

foreach ($rows as $row) {
    echo "<tr>
            <td>{$row['product_code']}</td>
            <td>{$row['product_naam']}</td>
            <td>{$row['prijs']}</td>
          </tr>";
}

echo "</table>";

// Voeg een link toe naar delete.php met product_code=2 in de URL
echo "<p><a href='delete.php?product_code=2'>Verwijder product met code 2</a></p>";
?>
