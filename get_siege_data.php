<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armdruecken";
$person_id = $_GET["person_id"]; // Die ausgewählte Person

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage zur Auswahl der Siege der Person und der Gegner
$sql = "
    SELECT
        m.DatumUhrzeit as date,
        m.ZeitInSekunden as sieg_zeit,
        COUNT(m2.MatchID) as gegner_sieg_anzahl
    FROM
        matches m
    LEFT JOIN
        matches m2 ON m2.SiegerID = m.VerliererID
    WHERE
        m.SiegerID = ?
    GROUP BY
        m.DatumUhrzeit
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $person_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
if ($result->num_rows > 0) {
    // Daten in ein Array konvertieren
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// JSON-Ausgabe
header("Content-Type: application/json");
echo json_encode($data);

$stmt->close();
$conn->close();
?>
