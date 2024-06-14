<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

$servername = "localhost"; // dein Datenbank-Server
$username = "root"; // dein Datenbank-Benutzername
$password = ""; // dein Datenbank-Passwort
$dbname = "armdruecken"; // dein Datenbank-Name

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung hergestellt wurde
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// SQL-Abfrage, um Personen und ihre Anzahl an Siegen zu erhalten
$sql = "SELECT personen.ID, personen.Name, COUNT(matches.SiegerID) as Siege
        FROM personen
        LEFT JOIN matches ON personen.ID = matches.SiegerID
        GROUP BY personen.ID, personen.Name
        ORDER BY Siege DESC";

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
