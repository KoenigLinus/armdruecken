<?php

// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "root"; // Standardbenutzername für MySQL bei lokalen Servern
$password = ""; // Standardpasswort für MySQL bei lokalen Servern
$dbname = "armdruecken"; // Ersetze durch den Namen deiner Datenbank
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage, um alle Personen abzurufen
$sql = "SELECT ID, Name FROM personen";
$result = $conn->query($sql);

// Optionen für die Dropdown-Liste erstellen
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["ID"] . "'>" . $row["Name"] . "</option>";
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
