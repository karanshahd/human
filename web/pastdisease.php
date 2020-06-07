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
  $q = "select * from pastdisease where username='$uname';";
  $r = @mysqli_query ($dbc, $q);
  ?>

<style>
  .imageh{max-width:100%; margin:auto; display:block}
</style>

    <?php while($row = mysqli_fetch_array($r))
        {

            $diseasename=$row['diseasename'];
            $q1 = "select * from diseaseimages where username='$uname' and diseasename='$diseasename' and type='past';";
            $r1 = @mysqli_query ($dbc, $q1);
            $row1 = mysqli_fetch_array($r1);
            $rowCount = mysqli_num_rows($r1);

          echo '<div class="w3-card-4 w3-threequarter w3-white w3-margin-top w3-margin-bottom  w3-margin-right w3-container w3-padding-16" style="margin-left:12.5%">';
          echo '<div class="w3-container">';
          echo '<p class="w3-xxxlarge w3-center" style="font-weight:bold">'.$row['diseasename'].'</p>';
          echo '<hr>';
          if($rowCount>0)
          {
          echo '<img src="data:image/jpg;base64,'.base64_encode( $row1['imageData'] ).'" class="imageh w3-quarter w3-right" style="height:240px" />';
        }
          echo '<span class="w3-xxlarge">Hospital visited : </span><span class="w3-xlarge" >'.$row['hospitalname'].'</span><br>';
          echo '<span class="w3-xxlarge">Treated by : </span><span class="w3-xlarge" >'.$row['doctor'].'</span><br>';
          echo '<span class="w3-xxlarge">Medicines Taken : </span><span class="w3-xlarge" >'.$row['medicines'].'</span><br><br>';
          echo '<span class="w3-xlarge" style="font-weight:bold">Underwent treatment from : </span><span class="w3-xlarge" >'.$row['datefrom'].'</span><span class="w3-xlarge" style="font-weight:bold">to </span><span class="w3-xlarge" >'.$row['dateto'].'</span><br>';
          echo '</div>';
          echo '</div>';
        }
  ?>

</body>

</html>