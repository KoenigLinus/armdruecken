let winPercentageChart;

// Daten für das Diagramm abrufen und Diagramm/Tabelle aktualisieren
function fetchWinPercentageData() {
  fetch("get_win_percentage.php")
    .then((response) => response.json())
    .then((data) => {
      console.log("Fetched data:", data); // Debugging
      const names = data.map((item) => item.Name);
      const winPercentages = data.map((item) => parseFloat(item.Gewinnrate));

      const winPercentageOptions = {
        series: [
          {
            name: "Gewinnrate",
            data: winPercentages,
          },
        ],
        chart: {
          type: "bar",
          height: 350,
        },
        plotOptions: {
          bar: {
            horizontal: true,
          },
        },
        dataLabels: {
          enabled: false,
        },
        xaxis: {
          title: {
            text: "Gewinnrate (%)",
          },
          categories: names,
        },
        yaxis: {
          title: {
            text: "Personen",
          },
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val.toFixed(2) + "%";
            },
          },
        },
      };

      if (winPercentageChart) {
        winPercentageChart.updateOptions(winPercentageOptions);
      } else {
        winPercentageChart = new ApexCharts(
          document.querySelector("#win-percentage-chart"),
          winPercentageOptions,
        );
        winPercentageChart.render();
      }
    })
    .catch((error) => console.error("Error fetching data:", error));
}

// Initiale Daten laden
document.addEventListener("DOMContentLoaded", () => {
  console.log("Document loaded. Fetching data...");
  fetchWinPercentageData();
});
