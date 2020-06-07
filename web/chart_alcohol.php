<?php
session_start();

require_once ('mysqli_connect.php'); 

  $qry11 = "select * from dtobacco where tobacco='Yes' and diseasename='Swine flu';";
  $qry21 = "select * from dtobacco where tobacco='No' and diseasename='Swine flu';";
 
  $r11 = @mysqli_query ($dbc, $qry11); 
  $myrow11 = @mysqli_fetch_array ($r11);
  $num11 = $myrow11['count'];

  $r21 = @mysqli_query ($dbc, $qry21); 
  $myrow21 = @mysqli_fetch_array ($r21);
  $num21 = $myrow21['count'];

  $qry12 = "select * from dtobacco where tobacco='Yes' and diseasename='Cardiac Arrest';";
  $qry22 = "select * from dtobacco where tobacco='No' and diseasename='Cardiac Arrest';";
 
  $r12 = @mysqli_query ($dbc, $qry12); 
  $myrow12 = @mysqli_fetch_array ($r12);
  $num12 = $myrow12['count'];

  $r22 = @mysqli_query ($dbc, $qry22); 
  $myrow22 = @mysqli_fetch_array ($r22);
  $num22 = $myrow22['count'];

  $qry13 = "select * from dtobacco where tobacco='Yes' and diseasename='Dengue';";
  $qry23 = "select * from dtobacco where tobacco='No' and diseasename='Dengue';";
 
  $r13 = @mysqli_query ($dbc, $qry13); 
  $myrow13 = @mysqli_fetch_array ($r13);
  $num13 = $myrow13['count'];

  $r23 = @mysqli_query ($dbc, $qry23); 
  $myrow23 = @mysqli_fetch_array ($r23);
  $num23 = $myrow23['count'];

  $qry14 = "select * from dtobacco where tobacco='Yes' diseasename='Fractured Hand';";
  $qry24 = "select * from dtobacco where tobacco='No' and diseasename='Fractured Hand';";
 
  $r14 = @mysqli_query ($dbc, $qry14); 
  $myrow14 = @mysqli_fetch_array ($r14);
  $num14 = $myrow14['count'];

  $r24 = @mysqli_query ($dbc, $qry24); 
  $myrow24 = @mysqli_fetch_array ($r24);
  $num24 = $myrow24['count'];

  $qry15 = "select * from dtobacco where tobacco='Yes' and diseasename='Dementia';";
  $qry25 = "select * from dtobacco where tobacco='No' and diseasename='Dementia';";
 
  $r15 = @mysqli_query ($dbc, $qry15); 
  $myrow15 = @mysqli_fetch_array ($r15);
  $num15 = $myrow15['count'];

  $r25 = @mysqli_query ($dbc, $qry25); 
  $myrow25 = @mysqli_fetch_array ($r25);
  $num25 = $myrow25['count'];

 $qry16 = "select * from dtobacco where tobacco='Yes' and diseasename='Diabetes';";
  $qry26 = "select * from dtobacco where tobacco='No' and diseasename='Diabetes';";

  $r16 = @mysqli_query ($dbc, $qry16); 
  $myrow16 = @mysqli_fetch_array ($r16);
  $num16 = $myrow16['count'];

  $r26 = @mysqli_query ($dbc, $qry26); 
  $myrow26 = @mysqli_fetch_array ($r26);
  $num26 = $myrow26['count'];

 $qry17 = "select * from dtobacco where tobacco='Yes' and diseasename='Stroke';";
  $qry27 = "select * from dtobacco where tobacco='No' and diseasename='Stroke';";
 
  $r17 = @mysqli_query ($dbc, $qry17); 
  $myrow17 = @mysqli_fetch_array ($r17);
  $num17 = $myrow17['count'];

  $r27 = @mysqli_query ($dbc, $qry27); 
  $myrow27 = @mysqli_fetch_array ($r27);
  $num27 = $myrow27['count'];


 $qry18 = "select * from dtobacco where tobacco='Yes' and diseasename='Arrhythmia';";
  $qry28 = "select * from dtobacco where tobacco='No' and diseasename='Arrhythmia';";
 
  $r18 = @mysqli_query ($dbc, $qry18); 
  $myrow18 = @mysqli_fetch_array ($r18);
  $num18 = $myrow18['count'];

  $r28 = @mysqli_query ($dbc, $qry28); 
  $myrow28 = @mysqli_fetch_array ($r28);
  $num28 = $myrow28['count'];


 $qry19 = "select * from dtobacco where tobacco='Yes' and diseasename='High Blood Pressure';";
  $qry29 = "select * from dtobacco where tobacco='No' and diseasename='High Blood Pressure';";
 
  $r19 = @mysqli_query ($dbc, $qry19); 
  $myrow19 = @mysqli_fetch_array ($r19);
  $num19 = $myrow19['count'];

  $r29 = @mysqli_query ($dbc, $qry29); 
  $myrow29 = @mysqli_fetch_array ($r29);
  $num29 = $myrow27['count'];

  ?>

  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ['Disease Name', 'Yes', 'No'],
         ['Swine Flu',  <?php echo $num11 ?>,   <?php echo $num21 ?>],
         ['Cardiac Arrest',  <?php echo $num12 ?>,     <?php echo $num22 ?>],
         ['Dengue',  <?php echo $num13 ?>,     <?php echo $num23 ?>],
         ['Fractured Hand',  <?php echo $num14 ?>,     <?php echo $num24 ?>],
         ['Dementia',  <?php echo $num15 ?>,     <?php echo $num25 ?>],
         ['Diabetes',  <?php echo $num16 ?>,     <?php echo $num26 ?>],
         ['Stroke',  <?php echo $num17 ?>,      <?php echo $num27 ?>],
         ['Arrhythmia',  <?php echo $num18 ?>,      <?php echo $num28 ?>],
         ['High Blood Pressure',  <?php echo $num19 ?>,      <?php echo $num29 ?>]
        ]);

        var options = {
          width: 800,
          chart: {
            title: 'Disease relation with alcohol consumption',
          },
          bars: 'horizontal',
          series: {
            0: { axis: 'distance' },
            1: { axis: 'brightness' }
          },
          axes: {
            x: {
              distance: {label: 'parsecs'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'patients'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
    </script>
  </head>
  <body>
    <div id="dual_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>