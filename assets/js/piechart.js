// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var no_of_finance = document.getElementById('finance_articles').innerText
var no_of_lifestyle = document.getElementById('lifestyle_articles').innerText
var no_of_tech = document.getElementById('tech_articles').innerText
console.log(no_of_tech)
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Finance", "Lifestyle", "Tech"],
    datasets: [{
      data: [no_of_finance, no_of_lifestyle, no_of_tech],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
    }],
  },
});
