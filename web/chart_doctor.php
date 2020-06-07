<?php 
session_start();

require_once ('mysqli_connect.php'); 

  $qry11 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Swine flu';";
  $qry21 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Swine flu';";
  $qry31 = "select * from ddoc where doctor = 'Mobin' and diseasename='Swine flu';";
  $qry41 = "select * from ddoc where doctor = 'Prashant' and diseasename='Swine flu';";
  $qry51 = "select * from ddoc where doctor = 'Kering' and diseasename='Swine flu';";
  $qry61 = "select * from ddoc where doctor = 'Ammar' and diseasename='Swine flu';";
 
  $r11 = @mysqli_query ($dbc, $qry11); 
  $myrow11 = @mysqli_fetch_array ($r11);
  $num11 = $myrow11['count'];

  $r21 = @mysqli_query ($dbc, $qry21); 
  $myrow21 = @mysqli_fetch_array ($r21);
  $num21 = $myrow21['count'];

  $r31 = @mysqli_query ($dbc, $qry31); 
  $myrow31 = @mysqli_fetch_array ($r31);
  $num31 = $myrow31['count'];

  $r41 = @mysqli_query ($dbc, $qry41); 
  $myrow41 = @mysqli_fetch_array ($r41);
  $num41 = $myrow41['count'];

  $r51 = @mysqli_query ($dbc, $qry51); 
  $myrow51 = @mysqli_fetch_array ($r51);
  $num51 = $myrow51['count'];

  $r61 = @mysqli_query ($dbc, $qry61); 
  $myrow61 = @mysqli_fetch_array ($r61);
  $num61 = $myrow61['count'];

  $qry12 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Cardiac Arrest';";
  $qry22 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Cardiac Arrest';";
  $qry32 = "select * from ddoc where doctor = 'Mobin' and diseasename='Cardiac Arrest';";
  $qry42 = "select * from ddoc where doctor = 'Prashant' and diseasename='Cardiac Arrest';";
  $qry52 = "select * from ddoc where doctor = 'Kering' and diseasename='Cardiac Arrest';";
  $qry62 = "select * from ddoc where doctor = 'Ammar' and diseasename='Cardiac Arrest';";
 
  $r12 = @mysqli_query ($dbc, $qry12); 
  $myrow12 = @mysqli_fetch_array ($r12);
  $num12 = $myrow12['count'];

  $r22 = @mysqli_query ($dbc, $qry22); 
  $myrow22 = @mysqli_fetch_array ($r22);
  $num22 = $myrow22['count'];

  $r32 = @mysqli_query ($dbc, $qry32); 
  $myrow32 = @mysqli_fetch_array ($r32);
  $num32 = $myrow32['count'];

  $r42 = @mysqli_query ($dbc, $qry42); 
  $myrow42 = @mysqli_fetch_array ($r42);
  $num42 = $myrow42['count'];

  $r52 = @mysqli_query ($dbc, $qry52); 
  $myrow52 = @mysqli_fetch_array ($r52);
  $num52 = $myrow42['count'];

  $r62 = @mysqli_query ($dbc, $qry62); 
  $myrow62 = @mysqli_fetch_array ($r62);
  $num62 = $myrow62['count'];

  $qry13 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Dengue';";
  $qry23 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Dengue';";
  $qry33 = "select * from ddoc where doctor = 'Mobin' and diseasename='Dengue';";
  $qry43 = "select * from ddoc where doctor = 'Prashant' and diseasename='Dengue';";
  $qry53 = "select * from ddoc where doctor = 'Kering' and diseasename='Dengue';";
  $qry63 = "select * from ddoc where doctor = 'Ammar' and diseasename='Dengue';";
 
  $r13 = @mysqli_query ($dbc, $qry13); 
  $myrow13 = @mysqli_fetch_array ($r13);
  $num13 = $myrow13['count'];

  $r23 = @mysqli_query ($dbc, $qry23); 
  $myrow23 = @mysqli_fetch_array ($r23);
  $num23 = $myrow23['count'];

  $r33 = @mysqli_query ($dbc, $qry33); 
  $myrow33 = @mysqli_fetch_array ($r33);
  $num33 = $myrow33['count'];

  $r43 = @mysqli_query ($dbc, $qry43); 
  $myrow43 = @mysqli_fetch_array ($r43);
  $num43 = $myrow43['count'];

  $r53 = @mysqli_query ($dbc, $qry53); 
  $myrow53 = @mysqli_fetch_array ($r53);
  $num53 = $myrow53['count'];

  $r63 = @mysqli_query ($dbc, $qry63); 
  $myrow63 = @mysqli_fetch_array ($r63);
  $num63 = $myrow63['count'];

  $qry14 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Fractured Hand';";
  $qry24 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Fractured Hand';";
  $qry34 = "select * from ddoc where doctor = 'Mobin' and diseasename='Fractured Hand';";
  $qry44 = "select * from ddoc where doctor = 'Prashant' and diseasename='Fractured Hand';";
  $qry54 = "select * from ddoc where doctor = 'Kering' and diseasename='Fractured Hand';";
  $qry64 = "select * from ddoc where doctor = 'Ammar' and diseasename='Fractured Hand';";

  $r14 = @mysqli_query ($dbc, $qry14); 
  $myrow14 = @mysqli_fetch_array ($r14);
  $num14 = $myrow14['count'];

  $r24 = @mysqli_query ($dbc, $qry24); 
  $myrow24 = @mysqli_fetch_array ($r24);
  $num24 = $myrow24['count'];

  $r34 = @mysqli_query ($dbc, $qry34); 
  $myrow34 = @mysqli_fetch_array ($r34);
  $num34 = $myrow34['count'];

  $r44 = @mysqli_query ($dbc, $qry44); 
  $myrow44 = @mysqli_fetch_array ($r44);
  $num44 = $myrow44['count'];

  $r54 = @mysqli_query ($dbc, $qry54); 
  $myrow54 = @mysqli_fetch_array ($r54);
  $num54 = $myrow54['count'];

  $r64 = @mysqli_query ($dbc, $qry64); 
  $myrow64 = @mysqli_fetch_array ($r64);
  $num64 = $myrow64['count'];

  $qry15 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Dementia';";
  $qry25 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Dementia';";
  $qry35 = "select * from ddoc where doctor = 'Mobin' and diseasename='Dementia';";
  $qry45 = "select * from ddoc where doctor = 'Prashant' and diseasename='Dementia';";
  $qry55 = "select * from ddoc where doctor = 'Kering' and diseasename='Dementia';";
  $qry65 = "select * from ddoc where doctor = 'Ammar' and diseasename='Dementia';";
 
  $r15 = @mysqli_query ($dbc, $qry15); 
  $myrow15 = @mysqli_fetch_array ($r15);
  $num15 = $myrow15['count'];

  $r25 = @mysqli_query ($dbc, $qry25); 
  $myrow25 = @mysqli_fetch_array ($r25);
  $num25 = $myrow25['count'];

  $r35 = @mysqli_query ($dbc, $qry35); 
  $myrow35 = @mysqli_fetch_array ($r35);
  $num35 = $myrow35['count'];

  $r45 = @mysqli_query ($dbc, $qry45); 
  $myrow45 = @mysqli_fetch_array ($r45);
  $num45 = $myrow45['count'];

  $r55 = @mysqli_query ($dbc, $qry55); 
  $myrow55 = @mysqli_fetch_array ($r55);
  $num55 = $myrow55['count'];

  $r65 = @mysqli_query ($dbc, $qry65); 
  $myrow65 = @mysqli_fetch_array ($r65);
  $num65 = $myrow65['count'];

  $qry16 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Diabetes';";
  $qry26 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Diabetes';";
  $qry36 = "select * from ddoc where doctor = 'Mobin' and diseasename='Diabetes';";
  $qry46 = "select * from ddoc where doctor = 'Prashant' and diseasename='Diabetes';";
  $qry56 = "select * from ddoc where doctor = 'Kering' and diseasename='Diabetes';";
  $qry66 = "select * from ddoc where doctor = 'Ammar' and diseasename='Diabetes';";
 
  $r16 = @mysqli_query ($dbc, $qry16); 
  $myrow16 = @mysqli_fetch_array ($r16);
  $num16 = $myrow16['count'];

  $r26 = @mysqli_query ($dbc, $qry26); 
  $myrow26 = @mysqli_fetch_array ($r26);
  $num26 = $myrow26['count'];

  $r36 = @mysqli_query ($dbc, $qry36); 
  $myrow36 = @mysqli_fetch_array ($r36);
  $num36 = $myrow36['count'];

  $r46 = @mysqli_query ($dbc, $qry46); 
  $myrow46 = @mysqli_fetch_array ($r46);
  $num46 = $myrow46['count'];

  $r56 = @mysqli_query ($dbc, $qry56); 
  $myrow56 = @mysqli_fetch_array ($r56);
  $num56 = $myrow56['count'];

  $r66 = @mysqli_query ($dbc, $qry66); 
  $myrow66 = @mysqli_fetch_array ($r66);
  $num66 = $myrow66['count'];

  $qry17 = "select * from ddoc where doctor = 'Basil Shaikh' and diseasename='Stroke';";
  $qry27 = "select * from ddoc where doctor = 'Karan Shah' and diseasename='Stroke';";
  $qry37 = "select * from ddoc where doctor = 'Mobin' and diseasename='Stroke';";
  $qry47 = "select * from ddoc where doctor = 'Prashant' and diseasename='Stroke';";
  $qry57 = "select * from ddoc where doctor = 'Kering' and diseasename='Stroke';";
  $qry67 = "select * from ddoc where doctor = 'Ammar' and diseasename='Stroke';";
 
  $r17 = @mysqli_query ($dbc, $qry17); 
  $myrow17 = @mysqli_fetch_array ($r17);
  $num17 = $myrow17['count'];

  $r27 = @mysqli_query ($dbc, $qry27); 
  $myrow27 = @mysqli_fetch_array ($r27);
  $num27 = $myrow27['count'];

  $r37 = @mysqli_query ($dbc, $qry37); 
  $myrow37 = @mysqli_fetch_array ($r37);
  $num37 = $myrow37['count'];

  $r47 = @mysqli_query ($dbc, $qry47); 
  $myrow47 = @mysqli_fetch_array ($r47);
  $num47 = $myrow47['count'];

  $r57 = @mysqli_query ($dbc, $qry57); 
  $myrow57 = @mysqli_fetch_array ($r57);
  $num57 = $myrow57['count'];

  $r67 = @mysqli_query ($dbc, $qry67); 
  $myrow67 = @mysqli_fetch_array ($r67);
  $num67 = $myrow64['count'];

?>

<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Disease Name',  'Basil Shaikh', 'Karan Shah', 'Mobin', 'Prashant', 'Kering', 'Ammar'],
          ['Swine Flu', <?php echo $num11 ?>,    <?php echo $num21 ?>, <?php echo $num31 ?>, <?php echo $num41 ?>, <?php echo $num51 ?>, <?php echo $num61 ?>],
          ['Cardiac Arrest', <?php echo $num12 ?>,  <?php echo $num22 ?>,  <?php echo $num32 ?>,  <?php echo $num42 ?>,  <?php echo $num52 ?>,  <?php echo $num62 ?>],
          ['Dengue', <?php echo $num13 ?>,  <?php echo $num23 ?>,  <?php echo $num33 ?>,  <?php echo $num43 ?>,  <?php echo $num53 ?>,  <?php echo $num63 ?>],
          ['Fractured Hand',  <?php echo $num14 ?>,  <?php echo $num24 ?>,  <?php echo $num34 ?>,  <?php echo $num44 ?>,  <?php echo $num54 ?>,  <?php echo $num64 ?>],
          ['Dementia',  <?php echo $num15 ?>,  <?php echo $num25 ?>,  <?php echo $num35 ?>,  <?php echo $num45 ?>,  <?php echo $num55 ?>,  <?php echo $num65 ?>],
          ['Diabetes',  <?php echo $num16 ?>,  <?php echo $num26 ?>,  <?php echo $num36 ?>,  <?php echo $num46 ?>,  <?php echo $num56 ?>,  <?php echo $num66 ?>],
          ['Stroke', <?php echo $num17 ?>,  <?php echo $num27 ?>,  <?php echo $num37 ?>,  <?php echo $num47 ?>,  <?php echo $num57 ?>,  <?php echo $num67 ?>],
          
        ]);

        var options = {
          title: 'Doctor to Patient Chart',
          vAxis: {title: 'Patients'},
          isStacked: true
        };

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;" class="w3-display-middle"></div>
  </body>
</html>