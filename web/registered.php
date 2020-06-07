<?php
	session_start();
	include 'mysqli_connect.php';
	include 'cache_disable.php'; 
	$mpast = $_POST['mpast'];
	$mcurr = $_POST['mcurr'];
	$fpast = $_POST['fpast'];
	$fcurr = $_POST['fcurr'];
	$gfpast = $_POST['gfpast'];
	$gfcurr = $_POST['gfcurr'];
	$gmpast = $_POST['gmpast'];
	$gmcurr = $_POST['gmcurr'];
	$username =	$_SESSION['user'];
	$sql1 = "INSERT INTO family VALUES('$username','$mpast','past','Mother');";
	@mysqli_query($dbc, $sql1);

	$sql2 = "INSERT INTO family VALUES('$username','$gmpast','past','Grand Mother');";
	@mysqli_query($dbc, $sql2);

	$sql3 = "INSERT INTO family VALUES('$username','$gfpast','past','Father');";
	@mysqli_query($dbc, $sql3);

	$sql4 = "INSERT INTO family VALUES('$username','$fpast','past','Grand Father');";
	@mysqli_query($dbc, $sql4);

	$sql5 = "INSERT INTO family VALUES('$username','$mcurr','current','Mother');";
	@mysqli_query($dbc, $sql5);

	$sql6 = "INSERT INTO family VALUES('$username','$gmcurr','current','Grand Mother');";
	@mysqli_query($dbc, $sql6);

	$sql7 = "INSERT INTO family VALUES('$username','$fcurr','current','Father');";
	@mysqli_query($dbc, $sql7);

	$sql8 = "INSERT INTO family VALUES('$username','$gfcurr','current','Grand Father');";
	@mysqli_query($dbc, $sql8);

	if(@mysqli_error($dbc))
	{
		header('Location: error.php');
	}
	else
	{

		header('Location: index.html');
	}

?>