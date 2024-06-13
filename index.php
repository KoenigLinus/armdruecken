<!-- sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="table.css" />
    <title>armdrücken</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <section class="hero">
        <div class="center">
            <h1>Armdrücken!</h1>
        </div>
        <img src="images/arm-wrestling.jpg">
    </section>

    <section class="matchesList">
        <?php include "liste.php"; ?>
    </section>

    <!--
    Ranking:
        - Aus dem Reinem Gewinnen
        - Aus der Geschwindigkeit   (mit leistungsnievauo)
        - Entwicklung
    -->

    <section class="personList"></section>
    <section class="add person">
        <h2>Neue Person hinzufügen</h2>
        <form action="insert_data.php" method="post">
            <input type="text" id="name" name="name" placeholder="Name">
            <br><br>
            <input type="password" id="password" name="password" placeholder="Sicherheitscode">
            <br><br>
            <input type="submit" value="Person hinzufügen">
        </form>
    </section>

    <section class="specs">
        <h2>Statistiken</h2>
        <label for="person">Wähle eine Person:</label>
        <select id="person" onchange="fetchData()"></select>
        <div id="chart"></div>
        <script src="siege_data.js"></script>
    </section>

    <section class="add match">
       <h2>Neues Match hinzufügen</h2>
        <form action="insert_data.php" method="post">
            <label for="sieger">Sieger:</label>
            <select id="sieger" name="sieger" required>
               <?php include "list_all_persons.php"; ?>
            </select>
            <br><br>
            <label for="verlierer">Verlierer:</label>
            <select id="verlierer" name="verlierer" required>
                <?php include "list_all_persons_two.php"; ?>
            </select>
            <br><br>
            <label for="datum">Datum & Uhrzeit:</label>
            <input type="datetime-local" id="datum" name="datum" required>
            <br><br>
            <label for="zeit">Zeit in Sekunden:</label>
            <input type="number" id="zeit" name="zeit" required>
            <br><br>
            <input type="submit" value="Match hinzufügen">
        </form>
   </section>


</body>
</html>
