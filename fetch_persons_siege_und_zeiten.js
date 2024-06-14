let win_chart;

function fetchWinData() {
  fetch("get_persons_siege_und_zeiten.php")
    .then((response) => response.json())
    .then((data) => {
      // Daten für das Diagramm vorbereiten
      const names = data.map((item) => item.Name);
      const siege = data.map((item) => item.Siege);
      const durchschnittlicheSiegZeit = data.map(
        (item) => item.DurchschnittlicheSiegZeit,
      );

      const win_options = {
        series: [
          {
            name: "Anzahl der Siege",
            type: "bar",
            data: siege,
          },
          {
            name: "Durchschnittliche Siegzeit (Sekunden)",
            type: "bar",
            data: durchschnittlicheSiegZeit,
          },
        ],
        chart: {
          height: 350,
          type: "bar",
          stacked: false,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          width: [4, 4],
          curve: "smooth",
        },
        xaxis: {
          categories: names,
        },
        color: ["#FFA500", "#0000FF"], // hier fraben machen pls
        yaxis: [
          {
            title: {
              text: "Anzahl der Siege",
            },
            min: 0,
          },
          {
            opposite: true,
            title: {
              text: "Durchschnittliche Siegzeit (Sekunden)",
            },
            min: 0,
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (val, { seriesIndex }) {
              if (seriesIndex === 0) {
                return val + " Siege";
              } else {
                return val.toFixed(2) + " Sekunden";
              }
            },
          },
        },
      };

      if (win_chart) {
        win_chart.updateOptions(win_options);
      } else {
        win_chart = new ApexCharts(
          document.querySelector("#win-chart"),
          win_options,
        );
        win_chart.render();
      }
    })
    .catch((error) => console.error("Error fetching data:", error));
}

// Standarddaten laden
document.addEventListener("DOMContentLoaded", () => {
  fetchVerlaufData();
  fetchWinData();
});
