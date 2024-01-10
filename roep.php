<?php
// index.php

include_once "functions.php";

// Voorbeeld van het oproepen van functies
$data = array('value1' => 'waarde1', 'value2' => 'waarde2');

// Selecteren en weergeven
$result = selectData();
echo "Geselecteerde gegevens: <pre>" . print_r($result, true) . "</pre>";

// Opslaan
insertData($data);
echo "Nieuwe gegevens toegevoegd.";

// Wijzigen
updateData(1, $data);
echo "Gegevens bijgewerkt.";

// Verwijderen
deleteData(2);
echo "Gegevens verwijderd.";
?>
