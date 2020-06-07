
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script src="jquery-3.1.1.js"></script>
<script>
function recpt(id) {
  $('#myStyle1').load(id);
}
</script>

<body class="w3-light-grey">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
   <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue" onclick="recpt('analyticsoverview.php')"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('diseasecount.php')"><i class="fa fa-eye fa-fw"></i>  Disease Count</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('chart_gender.php')"><i class="fa fa-users fa-fw"></i>  Sex Ratio for Diseases</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('chart_geo.php')"><i class="fa fa-bullseye fa-fw"></i>  Region wise analysis of diseases</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('chart_doctor.php')"><i class="fa fa-bell fa-fw"></i>   Doctor/Patients</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('chart_alcohol.php')"><i class="fa fa-history fa-fw"></i>  Disease/Alcohol Ratio</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onclick="recpt('chart_tobacco.php')"><i class="fa fa-cog fa-fw"></i>  Disease/Tobacco Ratio</a><br><br>

  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

 <div id='myStyle1'>
 <?php require_once('analyticsoverview.php'); ?>
</div>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
