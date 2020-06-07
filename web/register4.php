<?php session_start();
include 'mysqli_connect.php';
include 'cache_disable.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<script src="jquery-3.1.1.js"></script>
</head>

<body>

	<style type="text/css">

		.disp-tm{position:absolute;left:30%;top:20;transform:translate(-30%,20%);-ms-transform:translate(-30%,20%)}

		.dateclass{
			width:100%;
		}

		.dateclass.placeholderclass::before{
			width:100%;
			content:attr(placeholder);
		}

		.dateclass.placeholderclass:hover::before{
			width:0%;
			content:"";
		}

		.blueback{color:#fff!important;background-color:#007bb5!important}
		.deepblue{color:#fff !important; background-color:#233c83 !important}
		.blueback1{color:#fff!important;background-color:#c8eaf7!important}


		body
		{
			background-image: url("Images/back.png");
			background-size:     cover;
			background-repeat:   no-repeat;
			background-position: center center fixed;
		}

		.bgimage2{
			background-image: url('Images/logo.png'); no-repeat;
			height: 420px;
			margin: 0px auto;
			background-size: 100% 100%;
		}

		.blueback{color:#fff!important;background-color:#007bb5!important}
		.deepblue{color:#fff !important; background-color:#233c83 !important}
		.blueback1{color:#fff!important;background-color:#c8eaf7!important}

	}


</style>

<?php
$diseases = $_POST["diseases"];
$hospitals = $_POST["hospitals"];
$doctors = $_POST["doctors"];
$medicines = $_POST["medicines"];
$fromDate = $_POST["fromDate"];
$username =	$_SESSION['user'];
$userImage=$_POST['userImage'];
$i=0;
while($i<sizeof($diseases))
{
	$sql="INSERT INTO currentdisease VALUES('$username','$diseases[$i]','$fromDate[$i]','$hospitals[$i]','$medicines[$i]','$doctors[$i]');";
	mysqli_query($dbc, $sql);
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name'][$i]);
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name'][$i]));
	$sql1="INSERT INTO diseaseimages VALUES('$username','$diseases[$i]','current', '{$imgData}')";
	mysqli_query($dbc, $sql1);
	$i++;
}
?>

<div class=" w3-row-padding w3-container blueback w3-center w3-threequarter">
	<div class="w3-display-container w3-padding-32" style="max-height: 500px">
		<h1 class="w3-text-white" style="font-weight: bold">REGISTRATION</h1>
	</div>
</div>

</div>

<div class="bgimage2 w3-quarter w3-display-topright"></div>


<div class="w3-card-4 w3-half disp-tm">

	<div class="w3-container blueback">
		<h2>Miscellanous Information</h2>
	</div>

	<form class="w3-form w3-white" id="register" onsubmit="return validate()" action="register5.php" method="post" enctype="multipart/form-data">

		<div class="w3-card-2 w3-padding">
			
			<div class="w3-group"> 

				<input class="w3-input" type="text" name="icomp" id="icomp">
				<label class="w3-label w3-validate w3-text-black">Insurance Company</label><br>
			</div>

			<div class="w3-group">

				<input class="w3-input" type="text" name="icover" id="icover">
				<label class="w3-label w3-validate w3-text-black">Insurance Cover</label><br>
			</div>

			<div class="w3-group">

				<input class="w3-input" type="text" name="itype" id="itype">
				<label class="w3-label w3-validate w3-text-black">Insurance Type</label><br>
			</div>

		</div>

		<div class="w3-card-2 w3-padding">

			<div class="w3-group">
				
				<p>FOOD AND DIET</p>

				<input class="w3-radio" type="radio" name="diet" value="vegetarian" checked>
				<label>Vegetarian</label>

				<input class="w3-radio" type="radio" name="diet" value="non-vegetarian">
				<label>Non-Vegetarian</label>
			</div>

			<div class="w3-group">
				
				<p>ALCOHOL CONSUMPTION</p>

				<input class="w3-radio" type="radio" name="alcohol" value="yes" checked>
				<label>Yes</label>

				<input class="w3-radio" type="radio" name="alcohol" value="no">
				<label>No</label>
			</div>

			<div class="w3-group">

				<p>TOBACCO CONSUMPTION</p>
				
				<input class="w3-radio" type="radio" name="tobacco" value="yes" checked>
				<label>Yes</label>

				<input class="w3-radio" type="radio" name="tobacco" value="no">
				<label>No</label>
			</div>

			<div class="w3-group">

				<p>DRUGS INTAKE</p>
				
				<input class="w3-radio" type="radio" name="drugs" value="yes" checked>
				<label>Yes</label>

				<input class="w3-radio" type="radio" name="drugs" value="no">
				<label>No</label>
			</div>

			<div class="w3-group">

				<input class="w3-input" type="text" name="allergy" id="allergy">
				<label class="w3-label w3-validate w3-text-black">Allergies</label><br>
			</div>

		</div>

		<div class="w3-btn-group">
			<div class=w3-half>
				<input class="w3-btn deepblue w3-hover-indigo w3-ripple" type="reset" name="reset" value="Reset" style="width: 90%;" />
			</div>
			<div class=w3-half>
				<input class="w3-btn deepblue w3-hover-indigo w3-ripple w3-right" type="submit" name="next" value="Next" style="width: 90%;"  />
			</div>
		</div>

	</form>
	
</div>
<script type="text/javascript">
	function validate()
	{
		return true;  
	}
</script>
</body>
</html>
