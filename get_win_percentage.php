<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armdruecken";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung hergestellt wurde
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// SQL-Abfrage, um die Gewinnrate für jede Person zu berechnen und zu sortieren
$sql = "SELECT p.Name,
               COUNT(m.SiegerID) AS Siege,
               (COUNT(m.SiegerID) / (SELECT COUNT(*) FROM matches WHERE SiegerID = p.ID OR VerliererID = p.ID)) * 100 AS Gewinnrate
        FROM personen p
        LEFT JOIN matches m ON p.ID = m.SiegerID
        GROUP BY p.ID
        ORDER BY Gewinnrate DESC";

$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode(["error" => "Error in SQL query: " . $conn->error]);
}

// Verbindung schließen
$conn->close();
?>
