<?php
session_start();

require_once ('mysqli_connect.php'); 

  $qry1 = "select * from diseasecount where diseasename='Swine Flu';";
  $qry2 = "select * from diseasecount where diseasename='Cardiac Arrest';";
  $qry3 = "select * from diseasecount where diseasename='dengue';";
  $qry4 = "select * from diseasecount where diseasename='Fractured Hand';";
  $qry5 = "select * from diseasecount where diseasename='Dementia';";
  $qry6 = "select * from diseasecount where diseasename='Diabetes';";
  $qry7 = "select * from diseasecount where diseasename='Stroke';";
  $qry8 = "select * from diseasecount where diseasename='Arrhythmia';";
  $qry9 = "select * from diseasecount where diseasename='High Blood Pressure';";
 
  $r1 = @mysqli_query ($dbc, $qry1); 
  $myrow1 = @mysqli_fetch_array ($r1);
  $num1 = $myrow1['count'];

  $r2 = @mysqli_query ($dbc, $qry2); 
  $myrow2 = @mysqli_fetch_array ($r2);
  $num2 = $myrow2['count'];

  $r3 = @mysqli_query ($dbc, $qry3); 
  $myrow3 = @mysqli_fetch_array ($r3);
  $num3 = $myrow3['count'];

  $r4 = @mysqli_query ($dbc, $qry4); 
  $myrow4 = @mysqli_fetch_array ($r4);
  $num4 = $myrow4['count'];

  $r5 = @mysqli_query ($dbc, $qry5); 
  $myrow5 = @mysqli_fetch_array ($r5);
  $num5 = $myrow5['count'];

  $r6 = @mysqli_query ($dbc, $qry6); 
  $myrow6 = @mysqli_fetch_array ($r6);
  $num6 = $myrow6['count'];

  $r7 = @mysqli_query ($dbc, $qry7); 
  $myrow7 = @mysqli_fetch_array ($r7);
  $num7 = $myrow7['count'];

  $r8 = @mysqli_query ($dbc, $qry8); 
  $myrow8 = @mysqli_fetch_array ($r8);
  $num8 = $myrow8['count'];

  $r9 = @mysqli_query ($dbc, $qry9); 
  $myrow9 = @mysqli_fetch_array ($r9);
  $num9 = $myrow9['count'];


  ?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Disease Name', 'Total'],
          ['Swine Flu', <?php echo $num1 ?>],
          ['Cardiac Arrest', <?php echo $num2 ?> ],
          ['Dengue',  <?php echo $num3 ?>],
          ['Fractured Hand', <?php echo $num4 ?>],
          ['Dementia',    <?php echo $num5 ?>],
          ['Diabetes', <?php echo $num6 ?>],
          ['Stroke', <?php echo $num7 ?>],
          ['Arrythmia', <?php echo $num8 ?>],
          ['High Blood Pressure', <?php echo $num9 ?>]
        ]);

        var options1 = {
          title: 'Disease Count',
          is3D: true,
          'width':800,
          'height':500

        };

        var options2 = {
          title: 'Disease Count',
          is3D: true,
          'width':1020,
          'height':637.5

        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart1.draw(data, options1);

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart2.draw(data, options2);
      }
    </script>
  </head>
  <body>
  <div id="piechart_3d" onclick="document.getElementById('modal01').style.display='block'" class="w3-hover-opacity w3-display-middle"></div>

<div id="modal01" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
      <div id="piechart_3d1" class="w3-modal-content"></div>
</div>
  </body>
</html>