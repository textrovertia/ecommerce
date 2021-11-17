// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var no_of_finance = document.getElementById('finance_articles').innerText
console.log(no_of_finance)
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Finance", "Lifestyle", "Tech"],
    datasets: [{
      data: [no_of_finance, 15.58, 11.25],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
    }],
  },
});
