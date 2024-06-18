<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armdruecken";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$action = isset($_GET["action"]) ? $_GET["action"] : "";

switch ($action) {
    case "get_persons":
        $sql = "SELECT ID, Name FROM personen";
        $result = $conn->query($sql);
        $persons = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($persons);
        break;

    case "get_win_percentage":
        $sql = "SELECT p.Name, COUNT(m.SiegerID) AS Siege,
                       (COUNT(m.SiegerID) / (SELECT COUNT(*) FROM matches WHERE SiegerID = p.ID OR VerliererID = p.ID)) * 100 AS Gewinnrate
                FROM personen p
                LEFT JOIN matches m ON p.ID = m.SiegerID
                GROUP BY p.ID
                ORDER BY Gewinnrate DESC";
        $result = $conn->query($sql);
        if ($result) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($data);
        } else {
            echo json_encode([
                "error" => "Error in SQL query: " . $conn->error,
            ]);
        }
        break;

    case "get_siege_data":
        $person_id = isset($_GET["person_id"]) ? intval($_GET["person_id"]) : 0;
        $sql = "SELECT m.DatumUhrzeit as date, m.ZeitInSekunden as sieg_zeit, COUNT(m2.MatchID) as gegner_sieg_anzahl
                FROM matches m
                LEFT JOIN matches m2 ON m2.SiegerID = m.VerliererID
                WHERE m.SiegerID = ?
                GROUP BY m.DatumUhrzeit";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $person_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        $stmt->close();
        break;

    case "get_average_win_time":
        $sql = "SELECT p.Name, COUNT(m.MatchID) AS Siege, AVG(m.ZeitInSekunden) AS DurchschnittlicheSiegZeit
                FROM personen p
                LEFT JOIN matches m ON p.ID = m.SiegerID
                GROUP BY p.Name";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;

    default:
        echo json_encode(["error" => "Invalid action"]);
}

$conn->close();
?>
