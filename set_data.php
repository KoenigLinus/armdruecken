<?php
// Datenbankverbindungsdetails
$servername = "localhost";
$username = "root"; // Standardbenutzername für MySQL bei lokalen Servern
$password = ""; // Standardpasswort für MySQL bei lokalen Servern
$dbname = "armdruecken"; // Ersetze durch den Namen deiner Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Funktion, um Eingaben sicher zu verarbeiten
function sanitizeInput($input)
{
    global $conn;
    return mysqli_real_escape_string(
        $conn,
        htmlspecialchars(strip_tags($input))
    );
}

// Überprüfen und Verarbeiten der Formulardaten für das Hinzufügen einer neuen Person
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST["name"]) //&&
    //isset($_POST["password"])
) {
    echo "Variablen werden transveriert.";
    $name = sanitizeInput($_POST["name"]);
    $password = "kein passwor"; //sanitizeInput($_POST["password"]);

    // SQL-Befehl für das Einfügen einer neuen Person
    $sql = "INSERT INTO personen (Name, Passwort) VALUES ('$name', '$password')";

    if ($conn->query($sql) === true) {
        echo "Neue Person erfolgreich hinzugefügt.";
    } else {
        echo "Fehler beim Hinzufügen der Person: " . $conn->error;
    }
} else {
    echo "Kein name bzw. passwort";
}

// Überprüfen und Verarbeiten der Formulardaten für das Hinzufügen eines neuen Matches
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST["sieger"]) &&
    isset($_POST["verlierer"]) &&
    isset($_POST["datum"]) &&
    isset($_POST["zeit"])
) {
    $siegerID = sanitizeInput($_POST["sieger"]);
    $verliererID = sanitizeInput($_POST["verlierer"]);
    $datumUhrzeit = sanitizeInput($_POST["datum"]);
    $zeitInSekunden = sanitizeInput($_POST["zeit"]);

    // SQL-Befehl für das Einfügen eines neuen Matches
    $sql = "INSERT INTO matches (SiegerID, VerliererID, DatumUhrzeit, ZeitInSekunden) VALUES ('$siegerID', '$verliererID', '$datumUhrzeit', '$zeitInSekunden')";

    if ($conn->query($sql) === true) {
        echo "Neues Match erfolgreich hinzugefügt.";
    } else {
        echo "Fehler beim Hinzufügen des Matches: " . $conn->error;
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
