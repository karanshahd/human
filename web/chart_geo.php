<?php
session_start();

require_once ('mysqli_connect.php'); 

  $qry11 = "select * from da where city = 'Pune' and diseasename='Swine flu';";
  $qry21 = "select * from da where city = 'Bangalore' and diseasename='Swine flu';";
  $qry31 = "select * from da where city = 'Surat' and diseasename='Swine flu';";
  $qry41 = "select * from da where city = 'Mumbai' and diseasename='Swine flu';";
 
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

  $qry12 = "select * from da where city = 'Pune' and diseasename='Cardiac Arrest';";
  $qry22 = "select * from da where city = 'Bangalore' and diseasename='Cardiac Arrest';";
  $qry32 = "select * from da where city = 'Surat' and diseasename='Cardiac Arrest';";
  $qry42 = "select * from da where city = 'Mumbai' and diseasename='Cardiac Arrest';";
 
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

  $qry13 = "select * from da where city = 'Pune' and diseasename='Dengue';";
  $qry23 = "select * from da where city = 'Bangalore' and diseasename='Dengue';";
  $qry33 = "select * from da where city = 'Surat' and diseasename='Dengue';";
  $qry43 = "select * from da where city = 'Mumbai' and diseasename='Dengue';";
 
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

  $qry14 = "select * from da where city = 'Pune' and diseasename='Fractured Hand';";
  $qry24 = "select * from da where city = 'Bangalore' and diseasename='Fractured Hand';";
  $qry34 = "select * from da where city = 'Surat' and diseasename='Fractured Hand';";
  $qry44 = "select * from da where city = 'Mumbai' and diseasename='Fractured Hand';";
 
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

  $qry15 = "select * from da where city = 'Pune' and diseasename='Dementia';";
  $qry25 = "select * from da where city = 'Bangalore' and diseasename='Dementia';";
  $qry35 = "select * from da where city = 'Surat' and diseasename='Dementia';";
  $qry45 = "select * from da where city = 'Mumbai' and diseasename='Dementia';";
 
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


 $qry16 = "select * from da where city = 'Pune' and diseasename='Diabetes';";
  $qry26 = "select * from da where city = 'Bangalore' and diseasename='Diabetes';";
  $qry36 = "select * from da where city = 'Surat' and diseasename='Diabetes';";
  $qry46 = "select * from da where city = 'Mumbai' and diseasename='Diabetes';";
 
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


 $qry17 = "select * from da where city = 'Pune' and diseasename='Stroke';";
  $qry27 = "select * from da where city = 'Bangalore' and diseasename='Stroke';";
  $qry37 = "select * from da where city = 'Surat' and diseasename='Stroke';";
  $qry47 = "select * from da where city = 'Mumbai' and diseasename='Stroke';";
 
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


  ?>

  <html>
  <head>

<style>
  html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}

  .rowspacing {
    border-collapse: separate;
    border-spacing: 0 50px;
  }

.container { 
  width: 500px;
  height: 400px;
  position: relative;
  perspective: 800px;
}

#card {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card .back {
  background: white;
  transform: rotateY( 180deg );
}

#card.flipped {
  transform: rotateY( 180deg );
}

#card2 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card2 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card2 .back {
  background: white;
  transform: rotateY( 180deg );
}

#card2.flipped {
  transform: rotateY( 180deg );
}

#card3 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card3 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card3 .back {
  background: blue;
  transform: rotateY( 180deg );
}

#card3.flipped {
  transform: rotateY( 180deg );
}

#card4 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

.front{
  background-color: #c6dcff;
}

#card4 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card4 .back {
  background: white;
  transform: rotateY( 180deg );
}

#card4.flipped {
  transform: rotateY( 180deg );
}

#card5 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card5 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card5 .back {
  background: white;
  transform: rotateY( 180deg );
}

#card5.flipped {
  transform: rotateY( 180deg );
}

#card6 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card6 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card6 .back {
  background: white;
  transform: rotateY( 180deg );
}

#card6.flipped {
  transform: rotateY( 180deg );
}

#card7 {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card7 div {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card7 .back {
  background: white;
  transform: rotateY( 180deg );
}

#card7.flipped {
  transform: rotateY( 180deg );
}

</style>

<script>
  function change_autorefreshdiv(div_name){
    var NAME = document.getElementById(div_name);
    var currentClass = NAME.className;
    if (currentClass == "") {
        NAME.className = "flipped";
    } else {
        NAME.className = "";
    }

}   
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=[]&callback=initMap"></script>
<script>

function initialize() {
var mapProp = {
  zoom: 16,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>
     google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data1 = google.visualization.arrayToDataTable([
        ['City',   'Total'],
        ['Pune',      <?php echo $num11 ?>],
        ['Bangalore',   <?php echo $num21 ?>],
        ['Surat',    <?php echo $num31 ?>],
        ['Mumbai',     <?php echo $num41 ?>],
      ]);

      var data2 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num12 ?>],
        ['Bangalore',   <?php echo $num22 ?>],
        ['Surat',    <?php echo $num32 ?>],
        ['Mumbai',     <?php echo $num42 ?>],
      ]);

      var data3 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num13 ?>],
        ['Bangalore',   <?php echo $num23 ?>],
        ['Surat',    <?php echo $num33 ?>],
        ['Mumbai',     <?php echo $num43 ?>],
      ]);

      var data4 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num14 ?>],
        ['Bangalore',   <?php echo $num24 ?>],
        ['Surat',    <?php echo $num34 ?>],
        ['Mumbai',     <?php echo $num44 ?>],
      ]);

      var data5 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num15 ?>],
        ['Bangalore',   <?php echo $num25 ?>],
        ['Surat',    <?php echo $num35 ?>],
        ['Mumbai',     <?php echo $num45 ?>],
      ]);

      var data6 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num16 ?>],
        ['Bangalore',   <?php echo $num26 ?>],
        ['Surat',    <?php echo $num36 ?>],
        ['Mumbai',     <?php echo $num46 ?>],
      ]);

      var data7 = google.visualization.arrayToDataTable([
         ['City',   'Total'],
        ['Pune',      <?php echo $num17 ?>],
        ['Bangalore',   <?php echo $num27 ?>],
        ['Surat',    <?php echo $num37 ?>],
        ['Mumbai',     <?php echo $num47 ?>],
      ]);

      var options = {
        region: 'IN',
        domain: 'IN',
        displayMode: 'markers',
        backgroundColor: '#1c6ba0',
        colorAxis: {colors: ['green', 'blue','red','yellow']},
        'width':500,
        'height':400
      };

      var chart1 = new google.visualization.GeoChart(document.getElementById('chart_div1'));
      var chart2 = new google.visualization.GeoChart(document.getElementById('chart_div2'));
      var chart3 = new google.visualization.GeoChart(document.getElementById('chart_div3'));
      var chart4 = new google.visualization.GeoChart(document.getElementById('chart_div4'));
      var chart5 = new google.visualization.GeoChart(document.getElementById('chart_div5'));
      var chart6 = new google.visualization.GeoChart(document.getElementById('chart_div6'));
      var chart7 = new google.visualization.GeoChart(document.getElementById('chart_div7'));
      chart1.draw(data1, options);
      chart2.draw(data2, options);
      chart3.draw(data3, options);
      chart4.draw(data4, options);
      chart5.draw(data5, options);
      chart6.draw(data6, options);
      chart7.draw(data7, options);
    };
    </script>
  </head>
  <body>
  
  <table class="columns rowspacing w3-table">
      <tr>
        <td><section class="container">
  <div id="card" onclick="change_autorefreshdiv('card')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">SWINE FLU</p></div>
    <div id="chart_div1" class="back"></div>
  </div>
</section></td>
        <td><section class="container">
  <div id="card2" onclick="change_autorefreshdiv('card2')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">CARDIAC ARREST</p></div>
    <div id="chart_div2" class="back"></div>
  </div>
</section></td>
        <td><section class="container">
  <div id="card3" onclick="change_autorefreshdiv('card3')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">FRACTURED HAND</p></div>
    <div id="chart_div3" class="back"></div>
  </div>
</section></td>
      </tr>
      <tr>
        <td><section class="container">
  <div id="card4" onclick="change_autorefreshdiv('card4')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">DENGUE</p></div>
    <div id="chart_div4" class="back"></div>
  </div>
</section></td>
        <td><section class="container">
  <div id="card5" onclick="change_autorefreshdiv('card5')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">DEMENTIA</p></div>
    <div id="chart_div5" class="back"></div>
  </div>
</section></td>
        <td><section class="container">
  <div id="card6" onclick="change_autorefreshdiv('card6')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">DIABETES</p></div>
    <div id="chart_div6" class="back"></div>
  </div>
</section></td>
      </tr>
       <tr>
        <td></td>
        <td><section class="container">
  <div id="card7" onclick="change_autorefreshdiv('card7')" class="">
    <div class="front"><p class="w3-center w3-bold w3-xlarge">STROKE</p></div>
    <div id="chart_div7" class="back"></div>
  </div>
</section></td>
        <td></td>
      </tr>
    </table> 
  </body>
</html>