<?php
// functions.php

include_once "dbconn.php";

function selectData() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM jouw_tabel_naam");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertData($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO jouw_tabel_naam (column1, column2) VALUES (?, ?)");
    $stmt->execute([$data['value1'], $data['value2']]);
}

function updateData($id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE jouw_tabel_naam SET column1 = ?, column2 = ? WHERE id = ?");
    $stmt->execute([$data['value1'], $data['value2'], $id]);
}

function deleteData($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM jouw_tabel_naam WHERE id = ?");
    $stmt->execute([$id]);
}
?>
