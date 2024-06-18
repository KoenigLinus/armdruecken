<!-- moin sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="table.css" />
    <title>armdruecken</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <section class="hero">
        <div class="center">
            <h1>Armdruecken!</h1>
        </div>
        <div class="transition"></div>
        <img src="images/arm-wrestling.jpg"></img>
    </section>

    <section class="matchesList">
        <?php include "liste.php"; ?>
    </section>

    <section class="specs">
        <h2>Statistiken</h2>
        <h3>Gewinnrate</h3>
        <div id="win-percentage-chart"></div>
        <script src="fetch_win_percentage.js"></script>
        <!--  -->
        <h3>Verlauf</h3>
        <label for="person">Wähle eine Person:</label>
        <select id="person" onchange="fetchData()"></select>
        <div id="verlauf_chart"></div>
        <script src="fetch_zeiten_und_gegner_siege.js"></script>
        <!--  -->
        <h3>Siege und Zeiten</h3>
        <div id="win-chart"></div>
        <script src="fetch_persons_siege_und_zeiten.js"></script>
    </section>

    <section class="add">
       <h2>Neues Match hinzufuegen</h2>
        <form action="set_data.php" method="post">
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
            <input type="submit" value="Match hinzufuegen">
        </form>
       <h2>Neue Person hinzufuegen</h2>
       <form action="set_data.php" method="post">
           <input type="text" id="name" name="name" placeholder="Name">
           <br><br>
               <!--<input type="password" id="password" name="password" placeholder="Sicherheitscode">
               <br><br>-->
           <input type="submit" value="Person hinzufuegen">
       </form>
   </section>

</body>
</html>
