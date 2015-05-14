

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {

    var data = google.visualization.arrayToDataTable([
     ['B_UNIT', 'Cardiovascular', 'Asthama', 'CNS', 'Oncology',
         'Diabetes',  { role: 'annotation' } ],
        ['PEI', 10, 25, 45, 25, 18, ''],
        ['NFLD', 15, 35, 55, 45, 16, ''],
        ['NB', 20, 45, 65, 65, 55,  ''],
        ['NS', 25, 55, 75, 85, 65, ''],
        ['MB', 30, 65, 85, 102, 85, ''],
        ['SASK',35, 75, 95, 125, 96,  ''],
        ['BC', 40, 85, 105, 155, 99, ''],
        ['AB', 45, 95, 115, 185, 105, ''],
        ['OC', 50, 100, 125, 190, 115, ''],
        ['ON', 55, 105, 135, 200, 125,  ''],

      ]);
      var view = new google.visualization.DataView(data);


      var options = {

        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '85%' },
          colors: ['#7A92A3','#0B62A4','#2DAAE1','#002840','#3C5B9B'],
        isStacked: true,
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("google-stacked-chart"));
      chart.draw(view, options);
  }



