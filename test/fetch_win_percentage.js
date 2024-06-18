let winPercentageChart;

function fetchWinPercentageData() {
  fetch("api.php?action=get_win_percentage")
    .then((response) => response.json())
    .then((data) => {
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
            formatter: (val) => `${val.toFixed(2)}%`,
          },
        },
        colors: ["#00E396"], // Customize color here
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

document.addEventListener("DOMContentLoaded", () => {
  fetchWinPercentageData();
});
