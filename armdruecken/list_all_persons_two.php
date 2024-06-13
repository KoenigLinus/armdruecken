<?php
// Verbindung zur Datenbank herstellen (erneut für die zweite Dropdown-Liste)
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Erneute SQL-Abfrage, um alle Personen abzurufen
$result = $conn->query($sql);

// Optionen für die zweite Dropdown-Liste erstellen
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["ID"] . "'>" . $row["Name"] . "</option>";
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
