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

  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}
  .blueback1{color:#000!important;background-color:#c8eaf7!important}
  
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

</style>
	
<?php

	$icomp = $_POST['icomp'];
	$icover = $_POST['icover'];
	$itype = $_POST['itype'];
	$diet = $_POST['diet'];
	$alcohol = $_POST['alcohol'];
	$tobacco = $_POST['tobacco'];
	$drugs = $_POST['drugs'];
	$allergy = $_POST['allergy'];
	$username =	$_SESSION['user'];
	$sql = "INSERT INTO insurance VALUES('$username','$icomp',$icover,'$itype');";
	mysqli_query($dbc, $sql);

	$sql1 = "INSERT INTO habits VALUES('$username','$diet','$alcohol','$tobacco','$drugs','$allergy');";
	mysqli_query($dbc, $sql1);
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
  			<h2>Family Tree</h2>
		</div>
		
		<form class="w3-form w3-white" id="register" onsubmit="return validate()" action="registered.php" method="post" enctype="multipart/form-data">

			<div class="w3-card-2 w3-padding">

			<div class="w3-container blueback1">
				<h4>Father</h4>
			</div>
			
			<div class="w3-group">

				<input class="w3-input" type="text" name="fpast" id="fpast">
				<label class="w3-label w3-validate w3-text-black">Past Diseases</label><br>
			</div>

			<div class="w3-group">
    		
				<input class="w3-input" type="text" name="fcurr" id="fcurr">
				<label class="w3-label w3-validate w3-text-black">Current Diseases</label><br>
			</div>

			</div>

			<div class="w3-card-2 w3-padding">
			
			<div class="w3-container blueback1">
				<h4>Mother</h4>
			</div>			
			
			<div class="w3-group"> 
    
				<input class="w3-input" type="text" name="mpast" id="mpast">
				<label class="w3-label w3-validate w3-text-black">Past Diseases</label><br>
			</div>

			<div class="w3-group">
    
				<input class="w3-input" type="text" name="mcurr" id="mcurr">
				<label class="w3-label w3-validate w3-text-black">Current Diseases</label><br>
			</div>

			</div>

			<div class="w3-card-2 w3-padding">

			<div class="w3-container blueback1">
				<h4>Grandfather</h4>
			</div>
			
			<div class="w3-group"> 
    
				<input class="w3-input" type="text" name="gfpast" id="gfpast">
				<label class="w3-label w3-validate w3-text-black">Past Diseases</label><br>
			</div>

			<div class="w3-group">
    
				<input class="w3-input" type="text" name="gfcurr" id="gfcurr">
				<label class="w3-label w3-validate w3-text-black">Current Diseases</label><br>
			</div>

			</div>

			<div class="w3-card-2 w3-padding">

			<div class="w3-container blueback1">
				<h4>Grandmother</h4>
			</div>
			
			<div class="w3-group"> 
    
				<input class="w3-input" type="text" name="gmpast" id="gmpast">
				<label class="w3-label w3-validate w3-text-black">Past Diseases</label><br>
			</div>

			<div class="w3-group">
    
				<input class="w3-input" type="text" name="gmcurr" id="gmcurr">
				<label class="w3-label w3-validate w3-text-black">Current Diseases</label><br>
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
