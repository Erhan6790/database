-- Maak de database "winkel" aan
CREATE DATABASE winkel;

-- Gebruik de aangemaakte database
USE winkel;

-- Maak de tabel "Producten" aan met de opgegeven kolommen
CREATE TABLE Producten(
    product_code INT PRIMARY KEY,
    product_naam VARCHAR(255),
    prijs_per_stuk DECIMAL(10, 2),
    omschrijving TEXT
);