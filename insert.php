<?php
$servername = "localhost";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product toevoegen</title>
</head>
<body>
    <h2>Voeg een nieuw product toe</h2>
    <form action="" method="post">
        Productnaam: <input type="text" name="product_naam"><br>
        Prijs per stuk: <input type="text" name="prijs_per_stuk"><br>
        Omschrijving: <input type="text" name="omschrijving"><br>
        <input type="submit" value="Voeg product toe">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving) VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuw product toegevoegd aan de database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>