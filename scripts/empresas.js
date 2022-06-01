google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
    ['Empresa', 'Mhl'],
    ['Google',34.8],
    ['Apple',10.6],
    ['Netflix',10.4],
    ['Microsoft',23.9],
    ['Amazon',14.5]
]);

var options = {
  title:'Empresas parceiras que mais oferecem estagios'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}