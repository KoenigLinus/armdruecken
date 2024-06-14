let verlauf_chart;

// Personen aus der Datenbank laden und Dropdown-Menü füllen
fetch("get_persons.php")
  .then((response) => response.json())
  .then((persons) => {
    const select = document.getElementById("person");
    persons.forEach((person) => {
      const option = document.createElement("option");
      option.value = person.ID;
      option.textContent = person.Name;
      select.appendChild(option);
    });

    // Daten für die erste Person abrufen und Diagramm/Tabelle aktualisieren
    if (persons.length > 0) {
      select.value = persons[0].ID;
      fetchDataVerlauf();
      console.log("fetch data wurde ausgerufen");
    }
  });

// Daten für die ausgewählte Person abrufen und Diagramm/Tabelle aktualisieren
function fetchDataVerlauf() {
  const person_id = document.getElementById("person").value;
  fetch(`get_siege_data.php?person_id=${person_id}`)
    .then((response) => response.json())
    .then((data) => {
      // Daten für das Diagramm vorbereiten
      const dates = data.map((item) => item.date);
      const sieg_zeiten = data.map((item) => item.sieg_zeit);
      const gegner_sieg_anzahl = data.map((item) => item.gegner_sieg_anzahl);

      const verlauf_options = {
        series: [
          {
            name: "Sieg Zeit (in Sekunden)",
            type: "line",
            data: sieg_zeiten,
          },
          {
            name: "Anzahl der Siege der Gegner",
            type: "column",
            data: gegner_sieg_anzahl,
          },
        ],
        chart: {
          height: 350,
          type: "line",
          stacked: false,
          id: "mainChart",
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          width: [4, 4],
          curve: "smooth",
        },
        xaxis: {
          type: "datetime",
          categories: dates,
        },
        tooltip: {
          shared: true,
          intersect: false,
          x: {
            format: "dd/MM/yy HH:mm",
          },
        },
        yaxis: [
          {
            title: {
              text: "Sieg Zeit (in Sekunden)",
            },
            min: 0,
          },
          {
            opposite: true,
            title: {
              text: "Anzahl der Siege der Gegner",
            },
            min: 0,
          },
        ],
        colors: ["#0390fc", "#fcba03"],
      };

      if (verlauf_chart) {
        verlauf_chart.updateOptions(verlauf_options);
      } else {
        verlauf_chart = new ApexCharts(
          document.querySelector("#verlauf_chart"),
          verlauf_options,
        );
        verlauf_chart.render();
      }
    })
    .catch((error) => console.error("Error fetching data:", error));
}
