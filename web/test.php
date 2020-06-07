<?php
session_start();

require_once ('mysqli_connect.php'); 

  ?>

  <html>
  <head>

<style>
.container { 
  width: 350px;
  height: 350px;
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
  background: blue;
  transform: rotateY( 180deg );
}

#card.flipped {
  transform: rotateY( 180deg );
}
</style>

<script>
	function change_autorefreshdiv(){
    var NAME = document.getElementById("card");
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
      var data = google.visualization.arrayToDataTable([
        ['City',   'Total'],
        ['Pune',      1],
        ['Bangalore',   2],
        ['Surat',    50],
        ['Mumbai',     5],
      ]);

      var options = {
        region: 'IN',
        displayMode: 'markers',
        colorAxis: {colors: ['green', 'blue']},
        'width':350,
        'height':350
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);

    };
    </script>

</head>
  <body>
  	<section class="container">
  <div id="card" onclick="change_autorefreshdiv()" class="">
  	<div id="chart_div" class="front"></div>
    <div class="back">2</div>
  </div>
</section>
  </body>
</html>