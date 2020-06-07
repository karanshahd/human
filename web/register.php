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

	.disp-tm{position:absolute;left:30%;top:10;transform:translate(-30%,10%);-ms-transform:translate(-30%,10%)}

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
    background-image: url('Images/logo.png') no-repeat;
    height: 420px;
    margin: 0px auto;
    background-size: 100% 100%;
  }

</style>

<?php
		$username = $_POST['username'];
    	$pwd = $_POST['pwd'];
    	$sql = "INSERT INTO generalLogin VALUES('$username','$pwd','patient');";
		mysqli_query($dbc, $sql);
		$_SESSION['user'] = $username;		
	?>

	<div class="w3-card-4 w3-half disp-tm">
		
		<div class="w3-container deepblue">
  			<h2>Basic Information</h2>
		</div>

		<form class="w3-form w3-white" id="register" onsubmit="return validate()" action="register2.php" method="post" enctype="multipart/form-data">
		
					<div class="w3-group"> 
    
				<input class="w3-input" type="text" name="name" id="name">
				<label class="w3-label w3-validate w3-text-black">Name</label><br>
			</div>

			<div class="w3-group w3-half">
				<input class="w3-btn-block w3-white" name="userImage" type="file"/><br>
				<label class="w3-label w3-validate w3-text-black">Potrait photograph</label><br>
			</div>

			<div class="w3-group w3-half">      
				<input class="w3-select w3-white" type="date" name="dob" id="dob" ><br>
				<label class="w3-label w3-validate w3-text-black">Date Of Birth</label><br>
			</div>

			<div class="w3-group w3-half">
				<div class="w3-center">
					<select name="gender" form="register" class="w3-white w3-btn-block">
							<option label="Choose Gender" unselected hidden></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Transgender">Transgender</option>
					</select>
				</div>
			</div>

			<div class="w3-group w3-half">
				<div class="w3-center">
					<select name="bldgrp1" form="register" class="w3-btn-block w3-half w3-white">
							<option label="Choose Blood Group" unselected hidden></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
					</select>
				</div>
				<div class="w3-center">
					<select name="bldgrp2" form="register" class="w3-btn-block w3-half w3-white">
							<option label="+ ve/- ve" unselected hidden></option>
							<option value="+">+ve</option>
							<option value="-">-ve</option>
					</select>
				</div>
			</div>

			<div class="w3-group">      
				<input class="w3-input" type="text" name="address" id="address">
				<label class="w3-label w3-validate w3-text-black">Address</label>
			</div>

			<div class="w3-group w3-quarter">
				<select name="country" form="register" class="countries w3-btn-block w3-white" id="countryId">
				<option value="">Select Country</option>
				</select>
			</div>
			<div class="w3-group w3-quarter">
				<select name="state"  form="register" class="states w3-btn-block w3-white" id="stateId">
					<option value="">Select State</option>
				</select>
			</div>
			<div class="w3-group w3-quarter">
				<select name="city"  form="register" class="cities w3-btn-block w3-white" id="cityId">
					<option value="">Select City</option>
				</select>
			</div>
			<div class="w3-group w3-quarter">
				<input class="w3-input" type="text" name="pincode" id="pincode">
				<label class="w3-label w3-validate w3-text-black w3-quarter">Pincode</label><br>
			</div>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
				<script src="//geodata.solutions/includes/countrystatecity.js"></script>


			<div class="w3-group">      
				<input class="w3-input" type="email" name="emailid" id="emailid">
				<label class="w3-label w3-validate w3-text-black">Email ID</label>
			</div>

			<div class="w3-group">      
				<input class="w3-input" type="text" pattern="[789][0-9]{9}" name="fphno" maxlength="10" id="fphno">
				<label class="w3-label w3-validate w3-text-black">Mobile No.</label>
			</div>

			<div class="w3-group w3-half">      
				<input class="w3-input" type="number" name="ht" id="ht">
				<label class="w3-label w3-validate w3-text-black">Height</label>
			</div>

			<div class="w3-group w3-half">      
				<input class="w3-input" type="number" name="wt" id="wt">
				<label class="w3-label w3-validate w3-text-black">Weight</label>
			</div>

			<div class="w3-group">      
				<input class="w3-input" type="text" name="rel" id="rel">
				<label class="w3-label w3-validate w3-text-black">Religion</label>
			</div>

			<br>

			<div class="w3-btn-group">
				<div class=w3-half>
				<input class="w3-btn w3-theme-l1 w3-hover-black w3-ripple" type="reset" name="reset" value="Reset" style="width: 90%;" />
				</div>
				<div class=w3-half>
					<input class="w3-btn w3-theme-l1 w3-hover-black w3-ripple w3-right" type="submit" name="next" value="Next" style="width: 90%;"  />
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
