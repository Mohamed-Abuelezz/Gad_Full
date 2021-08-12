
     $.ajax({
      url: "http://myprojects.com:8000/admin",
      type: "get",
      data:{"getCharts":'myBarChart'},
      success: function (response) {



    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: response['dataChartMonths'],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: response['dataChartMonthsViews'],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
   
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});


// console.log(response);

},
  error: function(jqXHR, textStatus, errorThrown) {
  //   console.log(textStatus, errorThrown);
  console.log('its error ')
  }
});
