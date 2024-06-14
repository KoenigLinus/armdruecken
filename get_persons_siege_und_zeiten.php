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

// SQL-Abfrage zur Ermittlung der Anzahl der Siege und der durchschnittlichen Siegzeit für jede Person
$sql = "
    SELECT
        p.Name,
        COUNT(m.MatchID) AS Siege,
        AVG(m.ZeitInSekunden) AS DurchschnittlicheSiegZeit
    FROM
        personen p
    LEFT JOIN
        matches m ON p.ID = m.SiegerID
    GROUP BY
        p.Name
";
$result = $conn->query($sql);

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

$conn->close();
?>
