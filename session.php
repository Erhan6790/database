<?php
// sessions.php

// Start de sessie
session_start();

// Maak variabelen aan en geef ze waarden
$_SESSION['naam'] = "Erhan K";
$_SESSION['email'] = "Erhan@mail.com";

echo "Variabelen zijn opgeslagen in de sessie.";
?>
