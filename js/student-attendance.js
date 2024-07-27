google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Day', 'Total Present', 'Total Absent'],
  ['Mon',550, 350],
  ['Tue',490, 390],
  ['Wed',440, 340],
  ['Thur',340, 300],
  ['Fri',350, 310]
]);

// Set Options
const options = {
  title:'Attendance'
};

// Draw
const chart = new google.visualization.ColumnChart(document.getElementById('myChart2'));
chart.draw(data, options);

}