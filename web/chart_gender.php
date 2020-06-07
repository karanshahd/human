<?php
session_start();

require_once ('mysqli_connect.php'); 

  $qry11 = "select * from dg where gender= 'Male' and diseasename='Swine flu';";
  $qry12 = "select * from dg where gender= 'Male' and diseasename='Cardiac Arrest';";
  $qry13 = "select * from dg where gender= 'Male' and diseasename='Dengue';";
  $qry14 = "select * from dg where gender= 'Male' and diseasename='Fractured Hand';";
  $qry15 = "select * from dg where gender= 'Male' and diseasename='Dementia';";
  $qry16 = "select * from dg where gender= 'Male' and diseasename='Diabetes';";
  $qry17 = "select * from dg where gender= 'Male' and diseasename='Stroke';";
  $qry18 = "select * from dg where gender= 'Male' and diseasename='Arrhythmia';";
  $qry19 = "select * from dg where gender= 'Male' and diseasename='High blood pressure';";

  $r11 = @mysqli_query ($dbc, $qry11); 
  $myrow11 = @mysqli_fetch_array ($r11);
  $num11 = $myrow11['count'];

  $r12 = @mysqli_query ($dbc, $qry12); 
  $myrow12 = @mysqli_fetch_array ($r12);
  $num12 = $myrow12['count'];

  $r13 = @mysqli_query ($dbc, $qry13); 
  $myrow13 = @mysqli_fetch_array ($r13);
  $num13 = $myrow13['count'];

  $r14 = @mysqli_query ($dbc, $qry14); 
  $myrow14 = @mysqli_fetch_array ($r14);
  $num14 = $myrow14['count'];

  $r15 = @mysqli_query ($dbc, $qry15); 
  $myrow15 = @mysqli_fetch_array ($r15);
  $num15 = $myrow15['count'];

  $r16 = @mysqli_query ($dbc, $qry16); 
  $myrow16 = @mysqli_fetch_array ($r16);
  $num16 = $myrow16['count'];

  $r17 = @mysqli_query ($dbc, $qry17); 
  $myrow17 = @mysqli_fetch_array ($r17);
  $num17 = $myrow17['count'];

  $r18 = @mysqli_query ($dbc, $qry18); 
  $myrow18 = @mysqli_fetch_array ($r18);
  $num18 = $myrow18['count'];

  $r19 = @mysqli_query ($dbc, $qry19); 
  $myrow19 = @mysqli_fetch_array ($r19);
  $num19 = $myrow19['count'];


  $qry21 = "select * from dg where gender= 'Female' and diseasename='Swine flu';";
  $qry22 = "select * from dg where gender= 'Female' and diseasename='Cardiac Arrest';";
  $qry23 = "select * from dg where gender= 'Female' and diseasename='Dengue';";
  $qry24 = "select * from dg where gender= 'Female' and diseasename='Fractured Hand';";
  $qry25 = "select * from dg where gender= 'Female' and diseasename='Dementia';";
  $qry26 = "select * from dg where gender= 'Female' and diseasename='Diabetes';";
  $qry27 = "select * from dg where gender= 'Female' and diseasename='Stroke';";
  $qry28 = "select * from dg where gender= 'Female' and diseasename='Arrhythmia';";
  $qry29 = "select * from dg where gender= 'Female' and diseasename='High blood pressure';";

  $r21 = @mysqli_query ($dbc, $qry21); 
  $myrow21 = @mysqli_fetch_array ($r21);
  $num21 = $myrow21['count'];

  $r22 = @mysqli_query ($dbc, $qry22); 
  $myrow22 = @mysqli_fetch_array ($r22);
  $num22 = $myrow22['count'];

  $r23 = @mysqli_query ($dbc, $qry23); 
  $myrow23 = @mysqli_fetch_array ($r23);
  $num23 = $myrow23['count'];

  $r24 = @mysqli_query ($dbc, $qry24); 
  $myrow24 = @mysqli_fetch_array ($r24);
  $num24 = $myrow24['count'];

  $r25 = @mysqli_query ($dbc, $qry25); 
  $myrow25 = @mysqli_fetch_array ($r25);
  $num25 = $myrow25['count'];

  $r26 = @mysqli_query ($dbc, $qry26); 
  $myrow26 = @mysqli_fetch_array ($r26);
  $num26 = $myrow26['count'];

  $r27 = @mysqli_query ($dbc, $qry27); 
  $myrow27 = @mysqli_fetch_array ($r27);
  $num27 = $myrow27['count'];

  $r28 = @mysqli_query ($dbc, $qry28); 
  $myrow28 = @mysqli_fetch_array ($r28);
  $num28 = $myrow28['count'];

  $r29 = @mysqli_query ($dbc, $qry29); 
  $myrow29 = @mysqli_fetch_array ($r29);
  $num29 = $myrow29['count'];

 ?>

 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data1 = google.visualization.arrayToDataTable([
          ['Disease Name', 'Total'],
          ['Swine Flu', <?php echo $num11 ?>],
          ['Cardiac Arrest', <?php echo $num12 ?> ],
          ['Dengue',  <?php echo $num13 ?>],
          ['Fractured Hand', <?php echo $num14 ?>],
          ['Dementia',    <?php echo $num15 ?>],
          ['Diabetes', <?php echo $num16 ?>],
          ['Stroke', <?php echo $num17 ?>],
          ['Arrythmia', <?php echo $num18 ?>],
          ['High Blood Pressure', <?php echo $num19 ?>]
        ]);

        var data2 = google.visualization.arrayToDataTable([
          ['Disease Name', 'Total'],
          ['Swine Flu', <?php echo $num21 ?>],
          ['Cardiac Arrest', <?php echo $num22 ?> ],
          ['Dengue',  <?php echo $num23 ?>],
          ['Fractured Hand', <?php echo $num24 ?>],
          ['Dementia',    <?php echo $num25 ?>],
          ['Diabetes', <?php echo $num26 ?>],
          ['Stroke', <?php echo $num27 ?>],
          ['Arrythmia', <?php echo $num28 ?>],
          ['High Blood Pressure', <?php echo $num29 ?>]
        ]);

        var options1 = {
          title: 'Male',
          pieHole: 0.4,
        };

         var options2 = {
          title: 'Female',
          pieHole: 0.4,
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart1.draw(data1, options1);

        var chart2 = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart2.draw(data2, options2);
      }
    </script>
  </head>
  <body>
  <table class="columns rowspacing w3-table">
      <tr>
        <td><div id="donutchart1" style="width: 600px; height: 500px;"></div></td>
        <td><div id="donutchart2" style="width: 600px; height: 500px;"></div></td>
        </tr>
        </table>

  </body>
</html>