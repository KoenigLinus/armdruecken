<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armdruecken";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage zur Auswahl aller Personen
$sql = "SELECT ID, Name FROM personen";
$result = $conn->query($sql);

$persons = [];
if ($result->num_rows > 0) {
    // Daten in ein Array konvertieren
    while ($row = $result->fetch_assoc()) {
        $persons[] = $row;
    }
}

// JSON-Ausgabe
header("Content-Type: application/json");
echo json_encode($persons);

$conn->close();
?>
