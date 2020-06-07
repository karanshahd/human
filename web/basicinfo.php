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
  $q = "select * from basicinfo where username='$uname'";
  $r = @mysqli_query ($dbc, $q); 
  $myrow = @mysqli_fetch_array ($r);

  $q2 = "select * from insurance where username='$uname'";
  $r2 = @mysqli_query ($dbc, $q2); 
  $myrow2 = @mysqli_fetch_array ($r2);

  ?>

<style>
  .imageh{max-width:100%;max-height: 100%; margin:auto; display:block}
</style>

<div class="w3-row-padding w3-padding-16" id="basic" style="margin-left: 12.5%">
   <?php echo '<div class="w3-quarter"> <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="data:'.$myrow['imageType'].';base64,'.base64_encode( $myrow['imageData'] ).'" class="imageh" />
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>'.$myrow['name'].'</h2>
          </div></div>
        </div><div>
       <div class="w3-white w3-container">
   <p class="w3-large"> CONTACT NUMBER : '.$myrow["contact"].'</p>
   <p class="w3-large"> EMAIL ID : '.$myrow["emailid"].'</p>
   <p class="w3-large"> ADDRESS : '.$myrow["address"].'</p>
   </div></div></div>' ?>
   <div class="w3-half"><div class="w3-card-4 w3-white w3-padding-16 w3-container">
   <span class="w3-xlarge" style="font-weight: bold">Date Of Birth : </span><span class="w3-xxlarge"><?php $mydate = strtotime($myrow['dob']);
echo date('F jS Y', $mydate); ?></span><br>
   <span class="w3-xlarge" style="font-weight: bold">Age : </span><span class="w3-xxlarge"><?php echo $myrow['age'] ?> years</span><br>
   <span class="w3-xlarge" style="font-weight: bold">Gender : </span><span class="w3-xxlarge"><?php echo $myrow['gender'] ?></span><br>
   <span class="w3-xlarge" style="font-weight: bold">Height : </span><span class="w3-xxlarge"><?php echo $myrow['height'] ?> cms</span><br>
   <span class="w3-xlarge" style="font-weight: bold">Weight : </span><span class="w3-xxlarge"><?php echo $myrow['weight'] ?> kgs</span><br>
   <span class="w3-xlarge" style="font-weight: bold">Religion followed : </span><span class="w3-xxlarge"><?php echo $myrow['religion'] ?></span><br>
   <span class="w3-xlarge" style="font-weight: bold">Blood Group : </span><span class="w3-xxlarge"><?php echo $myrow['blood'] ?></span>
   <hr>
   <span class="w3-xlarge" style="font-weight: bold">Insurance Company : </span><span class="w3-xxlarge"><?php echo $myrow2['company'] ?></span><br>
   <span class="w3-xlarge" style="font-weight: bold">Insurance Cover : </span><span class="w3-xxlarge"><?php echo $myrow2['cover'] ?></span><br>
   <span class="w3-xlarge" style="font-weight: bold">Insurance Type : </span><span class="w3-xxlarge"><?php echo $myrow2['type'] ?></span>
   </div></div> 
</div>

</body>

</html>