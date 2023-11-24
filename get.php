<!DOCTYPE html>
<html>
<head>
    <title>Ingevoerde gegevens</title>
    <style>
        body {
            text-align: center;
        }

        h2 {
            margin-top: 50px;
        }

        dl {
            display: inline-block;
            text-align: left;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }

        dt {
            font-weight: bold;
        }

        dd {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") { // Controleren of het formulier via GET is verzonden
        if (isset($_GET["naam"]) && isset($_GET["achternaam"]) && isset($_GET["leeftijd"]) && isset($_GET["adres"]) && isset($_GET["email"])) {
            $naam = $_GET["naam"];
            $achternaam = $_GET["achternaam"];
            $leeftijd = $_GET["leeftijd"];
            $adres = $_GET["adres"];
            $email = $_GET["email"];

            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "<dl>";
            echo "<dt>Naam:</dt><dd>$naam</dd>";
            echo "<dt>Achternaam:</dt><dd>$achternaam</dd>";
            echo "<dt>Leeftijd:</dt><dd>$leeftijd</dd>";
            echo "<dt>Adres:</dt><dd>$adres</dd>";
            echo "<dt>Email:</dt><dd>$email</dd>";
            echo "</dl>";
        }
    }
    ?>
</body>
</html>
    <title>Formulier</title>
</head>
<body>
    <form action="get.php" method="GET">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required><br><br>

        <label for="leeftijd">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd" required><br><br>

        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Versturen">
    </form>
</body>
</html>