# Armdrücken!

## Inhalt

0. **Prolog**
1. **Einleitung und Übersicht:** Eine kurze und prägnante Beschreibung des Projekts, einschließlich seiner Ziele und des Nutzens. Klar definieren, wer die Hauptnutzer der Dokumentation sein werden (z.B. Entwickler, Endbenutzer, Systemadministratoren).
2. **Technische Spezifikationen:** Darstellung des Datenbankmodells mit ER-Diagrammen und Beschreibungen der Tabellen, Felder und Beziehungen. Liste der verwendeten Technologien, Programmiersprachen, Frameworks und Tools.
3. **Benutzerdokumentation:** Anleitungen zur Nutzung der Webdatenbank für Endbenutzer, einschließlich Navigation, Suchfunktionen und Dateneingabe. Visuelle Anleitungen oder Videos, die die Nutzung der Webdatenbank demonstrieren.
4. **Entwicklerdokumentation:** Ausführliche Kommentierung und Beschreibung des Quellcodes, API-Dokumentation und Beispielcodes.
5. Anhang

## Prolog

> Manche Leute können ‚Krieg und Frieden‘ lesen und glauben, es sei eine schlichte Abenteuergeschichte. Andere lesen die Ingredentien auf einem Kaugummipapier und ihnen erschließt sich das Universum.“
> 
> *– Lex Luther in „Superman“ 1978*

Es ist wichtig aus der Geschichte zu lernen. Aber, wie? Man denkt einfach Dinge aus seinem Hinterkpf kramen zu können reiche aus, aber tut es das? Um diese Fragen zu für alle mal zu erschließen beschloss ich den Wettkampf aller Wettkämpfe die Schulhofbeschäftigung schlecht hin zu analysieren. Der eiserne Wettkampf um oben oder unten, um Sieg oder Verlust.

Der ewige Kampft für die Annerkennung der eigenen Sozietät treibt Menschen in die Wissenschaft. Einen möglichst schnellen Übergang der Bizepskräfte in den der Trizepse. Das Verlangen nach Mehr brachte eine breite von neuen Techniken und Übungen in die Sozietät Schule.

Ich habe mich diese angenommen. Eine Gruppe von Menschen nichts mehr als die Optimierung im Sinn.

## Einleitung

Das Projekt *Armdrücken!* besitzt einen künstlerischen Ursprung. Es kommt aus einer Welt in der es nicht, um Sinn oder Unsinn ging. Viel mehr aus einer in welcher die Lebensfreude und der Spaß an oberster Stelle steht.

Das Spiel Armdrücken entstammt einer Spieltradition der sehr alten Berufsgruppe der Holzfäller. Sie mussten sich entsprechend ihrer Berufsgruppe Geselligkeiten zum Zeitvertreib ausdenken. Der Kampf Holzfäller\*in gegen Holzfäller\*in kam dort wie gelegen. Jedoch ohne die Gefahr eines echten Zweikampfes, alleine Fokussiert auf das Notwendige (Jenen Ansatz habe ich ebenso in meine Programmierung einfließen lassen).

Mein Programm hintgegen bietet des passende kognitive Gegenstück zum rohen Austausch der eigenen Kräfte. Man könnte fast meinen für einen Ausgewogenen Lebensstil sei mein Programm notwendig.

Die Nutzer sind klar interessiert am Ergebnis ihrer eigenen Leistungen, suchen sich jedoch auch Rivalen, welche sie selbst übertreffen wollen.

## Technische Spekifikationen

### ER-Modell

Mein ER-Modell ist schnell erklärt. Es ist simpel, ist aber auch perfekt an meine Bedürfnisse Zugeschnitten.

1. **Personen:** Sie beinhalten, neben der `ID` den `Nickname` der korrispondierenden Person.
2. **Match:** Ein match ist ein Spiel bei dem es einen `Zeitpunkt` (TIMESTAMP, Datum und Uhrzeit) gibt sowie eine `Dauer`.

Die Relationen sind ebenso simpel doch bis aufs kleine verfeinert und ausgetüftelt.

1. **Sieger\*in:** Die Person, dessen Hand oben liegt.
2. **Verlierer\*in:** Die Person, dessen Hand, von der Überlegenheit der Gegnerin, des Gegners herunter gedrückt wurde.

![ER-Modell](https://github.com/KoenigLinus/armdruecken/assets/93053722/f991b487-1ca5-451b-acd7-3a781b17daa6)

## Verwendete Technologien

Den grundsätzlichen Aufbau verdanke ich `HTML`. Das Aussehen `css`. Beides, wie mein drittes für die Logikzuständige Tool `JavaScript`, Standarts im Bereich der Webentwicklung. Ich habe mich aufgrund der Wurzeln meines Themas für bodenständige und bewehrte Technologien zurückgegriffen.

Für die zunehmende Speizalisierungen im Bereich des Armdrückens griff ich jedoch auch auf speziellere Tool zurück. Für meine Datenbank verwendete ich `SQL`, für ihre Verwaltung `mySQL` mit welcher via `php` kommunizieren konnte. `phpmyadmin` half mir mit seiner `gui`, welche ich durch `Apache` erreichen konnte, außerdem stellte es mir ein Preview zur Verfügung. Diese Programme benutze ich alleine auf der Basis von `XAMPP` (*C*ross-Platform + *A*pache + *M*ySQL + *P*HP + *P*erl). Die `Fetch API` erlaubte es mir die mittels `PHP` erlangten Daten in meinen `JavaScript` code einzubinden.

Moderner ist `ApexCharts.js`, welche mir die Möglichkeit eröffnete Grafiken ohne großen Aufwand zu erstellen.

- `HTML`, `css`, `JavaScript`
- `SQL`,
- `XAMPP`: `mySQL`, `phpmyadmin`, `php`, `Apatche`
- `ApexCharts.js`

## Benutzerdokumentation

Um den\*r Nutzer\*in, in seiner Einfalt, sofort von meinem Produkt zu überzeugen zeige ich ihm\*ihr die ersten Dinge die er nicht kennt mit Dingen die ihm\*ihr bewusst sind.

1. Ich verdeutliche ihm\*ihr durch eine "Powergeladene Titelseite" (TM), dass mein Produkt die Spannung eines Armdrückduells inne hält.
2. Als nächstes aber zeige ich dem\*r Nutzer\*in, dass mein Podukt einen Vorteil hat: Dokumentation!
3. Wenn die legitimität meiner Daten akzeptiert wurde, zeige ich sofort, das was man wissen will. Wer hat gewonnen?

Als Gewinnen stufe ich die höchste Gewinnrate ein. Dies gewährleistet, dass es nicht einfach oft genug versuchen kann, sondern immer mit dabei bleibt.

4. Nachdem sich Favoriet\*innen gebildet haben lasse ich den\*r Nutzer\*in die Wahl die Suche zu spezifizieren. Man wählt selbst die Person aus und lässt dich von Daten überwältigen. Hier mit Fokus auf Zeit (blaue Linie), wobei der grüne Balken im Hintergrund die gesammten Siege seines Gegners, gegen welchen er gewonnen hat anzeigt.

5. Als Nächstes gewähre ich einen Blick auf die Gesammtanzahl der Siege und die Durchschnittsdauer eines Duells.

6. Zuletzt gebe ich den Usern die Möglichkeit selbst Datein einzugeben. Wenn die entsprechende Person nicht im System vorhanden ist, muss sie hinzugefügt werden

## Entwicklerdokumentation

### HTML

#### Links zum `css`

Ich verwende 2 verschiedene `css` Dateien, um eine Übersichtlichkeit zu wahren.

``` html
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="table.css" />
```

#### ApexCharts

Code wie Folgender taucht auf, da ich eine Libary namens `ApexCharts` verwende. Sie lässt mich Tabellen vergleichsweise einfach in `JavaScript` darzustellen. Der Code kommt, aber nicht aus dem nichts und so muss der nicht von mir verfasste Code andersweitig inportiert werden. Bei mir durch ein `<script>` Import einer Datei einer externen `URL`.

``` html
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
```

#### Aufbau

Der Aufbau des `html` lässt sich an meiner Hero-Page (Titelseite) gut exemplarisch Darstellen. Für jede Grobe Sektion habe ich ein `<sction>`-Element verwendet und als `class` die entsprechenden Themen, selbst wenn jene nicht gebraucht werden sind sie dennoch ein wichter Teil, um den Code für Programmierer übersichtlicher zu machen.

``` html
<section class="hero">
    <div class="center">
        <h1>Armdrücken!</h1>
    </div>
    <div class="transition"></div>
    <img src="images/arm-wrestling.jpg"></img>
</section>
```

#### Import von Dateien direkt über `php`

Gleich zu Beginn meines Codes importiere ich Daten direkt über `php`. Keine geschmackvolle Art und Weise, jedoch tut sie ihren Job. Sie erlaubt es mir mein `SQL` in `html` `<table>`s zu verschachteln.

``` HTML
<section class="matchesList">
    <?php include "liste.php"; ?>
</section>
```

Hier erkennt man wie mit `echo` ein `html` export möglich gemacht wird:

``` php
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
```
#### Import mit Umweg über die `fetch API`, `JavaScript` und `ApexCharts.js`

Im Code mit Kommentaren beschrieben:

``` HTML
<h3>Gewinnrate</h3> 
<div id="win-percentage-chart"></div> <!-- ApexChart wird hier abgelegt -->
<script src="fetch_win_percentage.js"></script> <!-- Folgendes Skript wird ausgeführt -->
```

``` JS
//Definition unserer Graphik
let winPercentageChart; 

// `fetch API`: Die `get_win_percentage.php` wird ausgeführt und in `JavaScript`-Variablen verpackt
function fetchWinPercentageData() {
  fetch("get_win_percentage.php")
    .then((response) => response.json())
    .then((data) => {
      console.log("Fetched data:", data); // Debugging
      const names = data.map((item) => item.Name);
      const winPercentages = data.map((item) => parseFloat(item.Gewinnrate));

//Optionen der Grafik wird definiert
      const winPercentageOptions = {

[…]

//Grafik wird definirt
winPercentageChart = new ApexCharts(
    //Mit Ablegeort `id="win-percentage-chart"`
    document.querySelector("#win-percentage-chart"),
    //Und den vorher definierten Optionen
    winPercentageOptions,
    );

//Einmal rendern bitte!
winPercentageChart.render();
//Mikrowellen *ping!* einfügen

[…]
```

``` php
<?php
[…]
//login mit vorher definierten Logindaten
$conn = new mysqli($servername, $username, $password, $dbname); 
[…]

//Variable `$sql` welche die `SQL`-Abfrage beinhaltet:
$sql = "SELECT p.Name,
               COUNT(m.SiegerID) AS Siege,
               (COUNT(m.SiegerID) / (SELECT COUNT(*) FROM matches WHERE SiegerID = p.ID OR VerliererID = p.ID)) * 100 AS Gewinnrate
        FROM personen p
        LEFT JOIN matches m ON p.ID = m.SiegerID
        GROUP BY p.ID
        ORDER BY Gewinnrate DESC";

//Abfrage der vordefinierten `SQL`-Afrage:
$result = $conn->query($sql);

//Verpackung des Output in den Array `$data`
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

//Schließung der Verbindung 
$conn->close();
?>
```

#### Den Export über `php`

Ebenfalls kommentierter Code

``` html
//Ein `<form>`-Element, das macht es einem super leicht Daten über `php` zu exportieren
<form action="set_data.php" method="post">
    //Ein `<input>`-Element, welches einem erlaubt leicht Datein einem `<form>` hinzuzufügen
    <input type="text" id="name" name="name" placeholder="Name">
        <br>
        <br>
    <input type="submit" value="Person hinzufügen">
</form>
```

``` php
<?php
[…]
// "Link… Verbinde dich…" Zelda (botw) 
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

[…]

// Jonny Kontroletty:
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST["name"]) &&
    isset($_POST["password"])
) {
    $name = sanitizeInput($_POST["name"]);
    $password = sanitizeInput($_POST["password"]);

    // "Und Gott schuf den Menschen zu seinem Bilde – und füge sie seiner `SQL`-Datenbank hinzu."
    $sql = "INSERT INTO personen (Name, Passwort) VALUES ('$name', '$password')";

    if ($conn->query($sql) === true) {
        echo "Neue Person erfolgreich hinzugefügt.";
    } else {
        // RIP (ist aber auch schon einmal passiert, und das war sicher nicht das letzte mal…)
        echo "Fehler beim Hinzufügen der Person: " . $conn->error;
    }
}

// Überprüfen und Vorbereitung für das Hinzufügen eines neuen Matches
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

    // Tinder: Ein neuer match?
    $sql = "INSERT INTO matches (SiegerID, VerliererID, DatumUhrzeit, ZeitInSekunden) VALUES ('$siegerID', '$verliererID', '$datumUhrzeit', '$zeitInSekunden')";

    if ($conn->query($sql) === true) {
        echo "Neues Match erfolgreich hinzugefügt.";
    } else {
        // Tinder: Spaß!
        echo "Fehler beim Hinzufügen des Matches: " . $conn->error;
    }
}

// Es gibt Abschiede, die fallen besonders schwer. Abschiede für immer.
$conn->close();
?>

```



---

## Epilog

Vielen Dank, dass Sie meine Dokumentation laßten.

Beenden wir es wie es begonnen hat, mit einem Zitat.

> Lerne zuhören, und du wirst auch von denjenigen Nutzen ziehen, die dummes Zeug reden.
> 
> *– Platon*


