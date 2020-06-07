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
  $q1 = "select diseasename from family where username='$uname' and relation='Mother' and type='current';";
  $r1 = @mysqli_query ($dbc, $q1); 
  $myrow1 = @mysqli_fetch_array ($r1);
  $q2 = "select diseasename from family where username='$uname' and relation='Father' and type='current';";
  $r2 = @mysqli_query ($dbc, $q2); 
  $myrow2 = @mysqli_fetch_array ($r2);
  $q3 = "select diseasename from family where username='$uname' and relation='Grand Mother' and type='current';";
  $r3 = @mysqli_query ($dbc, $q3); 
  $myrow3 = @mysqli_fetch_array ($r3);
  $q4 = "select diseasename from family where username='$uname' and relation='Grand Father' and type='current';";
  $r4 = @mysqli_query ($dbc, $q4); 
  $myrow4 = @mysqli_fetch_array ($r4);
  $q5 = "select * from family where username='$uname' and relation='Mother' and type='past';";
  $r5 = @mysqli_query ($dbc, $q5); 
  $myrow5 = @mysqli_fetch_array ($r5);
  $q6 = "select * from family where username='$uname' and relation='Father' and type='past';";
  $r6 = @mysqli_query ($dbc, $q6); 
  $myrow6 = @mysqli_fetch_array ($r6);
  $q7 = "select * from family where username='$uname' and relation='Grand Mother' and type='past';";
  $r7 = @mysqli_query ($dbc, $q7); 
  $myrow7 = @mysqli_fetch_array ($r7);
  $q8 = "select * from family where username='$uname' and relation='Grand Father' and type='past';";
  $r8 = @mysqli_query ($dbc, $q8); 
  $myrow8 = @mysqli_fetch_array ($r8);
  ?>

<style>
  .imageh{max-width:100%; margin:auto; display:block}
</style>

<div class="w3-row-padding w3-padding-16 w3-center" id="family">
    <div class="w3-quarter">
      <img src="Images/mother.jpg" alt="Sandwich" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Mother</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow1['diseasename'] ?></p>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow5['diseasename'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/father.jpg" alt="Steak" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Father</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow2['diseasename'] ?></p>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow6['diseasename'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/gmother.jpg" alt="Cherries" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Grandmother</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow3['diseasename'] ?></p>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow7['diseasename'] ?></p>
    </div>
    <div class="w3-quarter">
      <img src="Images/gfather.jpg" alt="Pasta and Wine" class="imageh" style="height: 300px">
      <h3 class="w3-xxlarge w3-text-black">Grandfather</h3>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow4['diseasename'] ?></p>
      <p class="w3-xlarge w3-text-black"><?php echo $myrow8['diseasename'] ?></p>
    </div>
  </div>
  <hr>

</body>

</html>