<?php

session_start();
include 'mysqli_connect.php';
include 'cache_disable.php';

if(isset($_POST['edit']))
{
	header("Location: profile.php");
}
if(isset($_POST['addDisease']))
{
	$uname=$_SESSION['uname'];
	$diseases = $_POST["diseases"];
	$hospitals = $_POST["hospitals"];
	$doctors = $_POST["doctors"];
	$medicines = $_POST["medicines"];
	$fromDate = $_POST["fromDate"];
	$i=0;
	$sql="INSERT INTO currentdisease VALUES('$uname','$diseases','$fromDate','$hospitals','$medicines','$doctors');";
	mysqli_query($dbc, $sql);
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name'][$i]);
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name'][$i]));
	$sql1="INSERT INTO diseaseimages VALUES('$uname','$diseases[$i]','current', '{$imgData}')";
	mysqli_query($dbc, $sql1);
	header("Location: profile.php");
}
?>