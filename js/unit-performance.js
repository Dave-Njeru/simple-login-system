google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Semester', 'Unit 1', 'Unit 2', 'Unit 3', 'Unit 4'],
    ['2021/06',  65,    80,        69,             68],
    ['2022/07',  57,      67,        87,             87],
    ['2023/08',  69,      70,        75,             68],
    ['2024/09',  56,      81,         59,             66]
  ]);

  var options = {
    title : 'Performance of units',
    vAxis: {title: 'score'},
    hAxis: {title: 'Semester'},
    seriesType: 'bars',
    series: {3: {type: 'line'}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('myChart'));
  chart.draw(data, options);
}