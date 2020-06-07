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
	<link rel="stylesheet" href="w3-theme-black.css">
	<script src="jquery-3.1.1.js"></script>
</head>

<body>
<style type="text/css">

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


</style>

<?php
	$diseases = $_POST["diseases"];
	$hospitals = $_POST["hospitals"];
	$doctors = $_POST["doctors"];
	$medicines = $_POST["medicines"];
	$fromDate = $_POST["fromDate"];
	$endDate = $_POST["endDate"];
	$username =	$_SESSION['user'];
	$userImage=$_POST['userImage'];
	$i=0;
	while($i<sizeof($diseases))
	{
		$sql="INSERT INTO pastdisease VALUES('$username','$diseases[$i]','$fromDate[$i]','$endDate[$i]','$hospitals[$i]','$medicines[$i]','$doctors[$i]');";
		mysqli_query($dbc, $sql);
		    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name'][$i]));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name'][$i]);
	$sql1="INSERT INTO diseaseimages VALUES('$username','$diseases[$i]','past', '{$imgData}')";
	mysqli_query($dbc, $sql1);
	$i++;
	}
?>

	
	<style type="text/css">
	
	.disp-tm{position:absolute;left:30%;top:35;transform:translate(-30%,35%);-ms-transform:translate(-30%,35%)}

  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}
  .blueback1{color:#fff!important;background-color:#c8eaf7!important}
  

</style>

<div class=" w3-row-padding w3-container blueback w3-center w3-threequarter">
    <div class="w3-display-container w3-padding-32" style="max-height: 500px">
      <h1 class="w3-text-white" style="font-weight: bold">REGISTRATION</h1>
        </div>
      </div>

</div>

<div class="bgimage2 w3-quarter w3-display-topright"></div>


	<div class="w3-half disp-tm">
		
	<div class="w3-container blueback">
  		<h2>Current Diseases</h2>
	</div>

	<form class="w3-form w3-white" method="post" action="register4.php" enctype="multipart/form-data">

		<div id="dynamicInput">
		<div class="w3-container w3-padding-32">
			<input type="text" class="w3-input" name="diseases[]">
			<label class="w3-label w3-validate w3-text-black">Disease 1</label><br>
			<input type="text" class="w3-input" name="hospitals[]">
			<label class="w3-label w3-validate w3-text-black">Hospital Visited</label><br>
			<input type="text" class="w3-input" name="doctors[]">
			<label class="w3-label w3-validate w3-text-black">Doctor Name</label><br>
			<input type="text" class="w3-input" name="medicines[]">
			<label class="w3-label w3-validate w3-text-black">Medicines taken</label><br><br>
			<input class="w3-btn-block w3-white" name="userImage[]" type="file" multiple /><br>
			<input class="w3-select w3-white" type="date" name="fromDate[]"><br>
			<label class="w3-label w3-validate w3-text-black">From</label><br>
		</div>
     </div>
     
    <div class="w3-padding-32"><input type="button" class="w3-btn-block w3-red" value="More diseases?" onClick="addInput('dynamicInput');"></div>

	<div class="w3-btn-group">
		<div class=w3-half>
			<input class="w3-btn deepblue w3-hover-indigo w3-ripple" type="reset" name="reset" value="Reset" style="width: 90%;" />
		</div>
		<div class=w3-half>
			<input class="w3-btn deepblue w3-hover-indigo w3-ripple w3-right" type="submit" name="next" value="Next" style="width: 90%;"  />
		</div>
	</div>

	</div>
</form>


<script type="text/javascript">
	var counter = 1;
	function addInput(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<div class='w3-container w3-padding-32'><input type='text' class='w3-input' name='diseases[]'><label class='w3-label w3-validate w3-text-black'>Disease " + ( counter + 1 ) + "</label><br><input type='text' class='w3-input' name='hospitals[]'><label class='w3-label w3-validate w3-text-black'>Hospital Visited</label><br><input type='text' class='w3-input' name='doctors[]'><label class='w3-label w3-validate w3-text-black'>Doctor name</label><br><input type='text' class='w3-input' name='medicines[]'><label class='w3-label w3-validate w3-text-black'>Medicines taken</label><br><br><input class='w3-btn-block w3-white' name='userImage[]' type='file' multiple/><br><div class='w3-group w3-half'><input class='w3-select w3-white' type='date' name='fromDate[]'><label class='w3-label w3-validate w3-text-black'>From</label><br><br></div>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
	}
</script>

</div>
</body>
</html>
