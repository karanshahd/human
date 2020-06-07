<?php
session_start();
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
if (!(isset($_SESSION['uname']) || $_SESSION['uname'] != '')) {
    header ("Location: index.html");
}

?>

<!DOCTYPE html>
<html>

<title>H.U.M.AN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link href="google_font.css" rel="stylesheet">
<script src="jquery-3.1.1.js"></script>
<style>
  html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

body
{
	background-image : url('Images/back2.jpg');
}
  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}
  .blueback1{color:#fff!important;background-color:#c8eaf7!important}
</style>
<body>

  <?php
  require_once ('mysqli_connect.php');
  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWORD', 'karan123');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'human');

  $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
  $uname=$_SESSION['uname'];
  ?>

<div class=" w3-row-padding w3-container blueback w3-center">
    <div class="w3-display-container w3-padding-32" style="max-height: 500px">
      <div class="w3-btn-grp userhead" style="margin-top: 2.5%">
          <div class="w3-third w3-margin-bottom" align="center">
            <input class="w3-btn w3-blue w3-xlarge w3-hover-indigo" type="submit" name="1" value="Basic Info" onclick="recpnt('basicinfo.php')" style="width: 98%">
          </div>

          <div class="w3-third w3-margin-bottom" align="center">
            <input class="w3-btn w3-blue w3-xlarge w3-hover-indigo" type="submit" name="2" value="Family Information" onclick="recpnt('family.php')" style="width: 98%">
          </div>

          <div class="w3-third w3-margin-bottom" align="center">
            <input class="w3-btn w3-blue w3-xlarge w3-hover-indigo" type="submit" name="3" value="Habits" onclick="recpnt('habits.php')" style="width: 98%">
          </div>

          <div class="w3-third w3-margin-bottom" align="center" style="margin-left: 17.17%">
            <input class="w3-btn w3-blue w3-xlarge w3-hover-indigo" type="submit" name="5" value="Current Diseases" onclick="recpnt('currentdiseases.php')" style="width: 98%">
          </div>

          <div class="w3-third w3-margin-bottom " align="center">
            <input class="w3-btn w3-blue w3-xlarge w3-hover-indigo" type="submit" name="6" value="Past Diseases" onclick="recpnt('pastdisease.php')" style="width: 98%">
          </div>

        </div>
      </div>

</div>

<script>
function recpnt(id) {
  $('#myStyle2').load(id);
}
</script>

<div id='myStyle2'>
<?php require_once('basicinfo.php'); ?>
</div>

</body>

</html>