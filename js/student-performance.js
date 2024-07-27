google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Semester', 'Score'],
  ['1.1',75],
  ['1.2',69],
  ['2.1',64],
  ['2.2',74],
  ['3.1',65]
]);

// Set Options
const options = {
  title:'Overall score per semester'
};

// Draw
const chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
chart.draw(data, options);

}