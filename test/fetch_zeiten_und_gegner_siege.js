let verlauf_chart;

document.addEventListener("DOMContentLoaded", () => {
  fetchPersons();
});

function fetchPersons() {
  fetch("api.php?action=get_persons")
    .then((response) => response.json())
    .then((persons) => {
      const select = document.getElementById("person");
      persons.forEach((person) => {
        const option = document.createElement("option");
        option.value = person.ID;
        option.textContent = person.Name;
        select.appendChild(option);
      });

      if (persons.length > 0) {
        select.value = persons[0].ID;
        fetchVerlaufData();
      }
    });
}

function fetchVerlaufData() {
  const person_id = document.getElementById("person").value;
  fetch(`api.php?action=get_siege_data&person_id=${person_id}`)
    .then((response) => response.json())
    .then((data) => {
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
          id: "verlauf_chart",
        },
        stroke: {
          width: [2, 0, 4],
          curve: "smooth",
        },
        plotOptions: {
          bar: {
            columnWidth: "50%",
          },
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [1],
        },
        labels: dates,
        xaxis: {
          type: "datetime",
        },
        yaxis: [
          {
            title: {
              text: "Sieg Zeit (in Sekunden)",
            },
          },
          {
            opposite: true,
            title: {
              text: "Anzahl der Siege der Gegner",
            },
          },
        ],
        colors: ["#FF1654", "#247BA0"], // Customize colors here
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: (val) => val.toFixed(2),
          },
        },
      };

      if (verlauf_chart) {
        verlauf_chart.updateOptions(verlauf_options);
      } else {
        verlauf_chart = new ApexCharts(
          document.querySelector("#chart"),
          verlauf_options,
        );
        verlauf_chart.render();
      }
    })
    .catch((error) => console.error("Error fetching data:", error));
}

document.getElementById("person").addEventListener("change", fetchVerlaufData);
