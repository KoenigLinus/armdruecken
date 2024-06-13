<?php
// Datenbankverbindungsdetails
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armdruecken"; // Ersetze durch den Namen deiner Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage, um die Match-Daten zusammen mit den Namen der Sieger und Verlierer abzurufen
$sql = "SELECT
            m.MatchID,
            p1.Name AS SiegerName,
            p2.Name AS VerliererName,
            m.DatumUhrzeit,
            m.ZeitInSekunden
        FROM matches m
        INNER JOIN personen p1 ON m.SiegerID = p1.ID
        INNER JOIN personen p2 ON m.VerliererID = p2.ID";

$result = $conn->query($sql);

// Überprüfen, ob die Abfrage Ergebnisse liefert
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nummer</th>
                <th>Sieger</th>
                <th>Verlierer</th>
                <th>Datum & Uhrzeit</th>
                <th>Zeit in Sekunden</th>
            </tr>";

    // Ausgabe der Daten jeder Zeile
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" .
            $row["MatchID"] .
            "</td>
                <td>" .
            $row["SiegerName"] .
            "</td>
                <td>" .
            $row["VerliererName"] .
            "</td>
                <td>" .
            $row["DatumUhrzeit"] .
            "</td>
                <td>" .
            $row["ZeitInSekunden"] .
            "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 Ergebnisse";
}

// Verbindung zur Datenbank schließen
$conn->close();
