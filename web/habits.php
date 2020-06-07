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

  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}
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
  $q = "select * from habits where username='$uname';";
  $r = @mysqli_query ($dbc, $q); 
  $myrow = @mysqli_fetch_array ($r);
  ?>

<style>
  .imageh{max-width:100%; margin:auto; display:block}
</style>

<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="Images/diet.jpg" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Diet plan</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow['diet'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/cigarettes.jpg" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Tobacco consumption</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow['tobacco'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/drinks.jpg" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Alcohol consumption</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow['alcohol'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/drugs.jpg" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Drug abuse</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow['drugs'] ?></p>
    </div>
  </div>
  <hr>
  <p class="w3-xxlarge w3-center w3-text-black">ALLERGIES : <?php echo $myrow['allergy'] ?></p>

</body>

</html>