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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="w3-theme-black.css">
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
	?>  


	<script type="text/javascript">
		function confirmation()
		{
			document.getElementById('id01').style.display='block';
		}

		function editing()
		{
			document.getElementById('id02').style.display='block';
		}

		function add_disease()
		{
			document.getElementById('id03').style.display='block';
		}

		function reDirect()
		{
			window.location.href='logout.php';
		}

		function backToDoctor()
		{
			window.location.href='validate.php';
		}
	</script> 
	<div id="id01" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom">
			<header class="w3-container blueback"> 
				<h2>Confirm exit</h2>
			</header>

			<div class="w3-container">

				<div class="w3-section">
					<p>Are you sure you want to logout?</p>
				</div>

				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
					<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-left w3-red">Cancel</button>
					<button class="w3-button w3-right deepblue" type="submit" onclick="reDirect()">Confirm</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar blueback w3-left-align">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left w3-padding-large w3-hover-white w3-large w3-black"><i class="material-icons w3-large w3-margin-right">local_pharmacy</i></a>
			<a href="#" class="w3-light-grey w3-btn w3-hide-small w3-mobile w3-bar-item"><i class="material-icons w3-large w3-margin-right">local_pharmacy</i>HUMAN</a>
			<button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="recp('userprofile2.php')" id="prof">Profile</button>
			<button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="recp('analytics.php')" id="analy">Analytics</button>
			<?php if($_SESSION['type']=='patient')
			{
				?><button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="editing()" id="editp">Edit Profile</button><?php
			}
			else
			{
				?><button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="add_disease()" id="editp">Add diseases</button><?php
			}
			?>

			<?php if($_SESSION['type']=='patient')
			{
				?><button class="w3-mobile w3-bar-item w3-right w3-hide-small w3-btn w3-hover-white" id="logout" onclick="confirmation()">Logout</button><?php
			}
			else
			{
				?><button class="w3-mobile w3-bar-item w3-right w3-hide-small w3-btn w3-hover-white" id="logout" onclick="backToDoctor()">Close Profile</button><?php
			}
			?>

		</div>

		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Profile</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Analytics</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="confirmation()">Logout</a>
		</div>

	</div>

	<div id="id02" class="w3-modal">
		<div class="w3-card-4 w3-modal-content w3-animate-zoom">

			<div class="w3-container blueback">
				<h2>Basic Information</h2>
			</div>
			<p class="w3-text-red">  * Enter the fields that need to be edited and leave the rest blank</p>

			<form class="w3-form w3-white" id="register" action="editAndAdd.php" method="post" enctype="multipart/form-data">

				<div class="w3-group">
					<input class="w3-btn-block w3-white" name="userImage" type="file"/><br>
					<label class="w3-label w3-validate w3-text-black">Potrait photograph</label><br>
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
					<div class="w3-center">
						<input class="w3-btn-block deepblue w3-hover-black w3-ripple" type="submit" name="edit" value="EDIT"/>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="id03" class="w3-modal">
		<div class="w3-card-4 w3-modal-content w3-animate-zoom">

			<div class="w3-container blueback">
				<h2>Add new disease</h2>
			</div>

			<form class="w3-form w3-white" id="register" action="editAndAdd.php" method="post" enctype="multipart/form-data">
				<div class="w3-container w3-padding-32">
					<input type="text" class="w3-input" name="diseases">
					<label class="w3-label w3-validate w3-text-black">Disease</label><br>
					<input type="text" class="w3-input" name="hospitals">
					<label class="w3-label w3-validate w3-text-black">Hospital Visited</label><br>
					<input type="text" class="w3-input" name="doctors">
					<label class="w3-label w3-validate w3-text-black">Doctor Name</label><br>
					<input type="text" class="w3-input" name="medicines">
					<label class="w3-label w3-validate w3-text-black">Medicines taken</label><br><br>
					<input class="w3-btn-block w3-white" name="userImage" type="file" multiple /><br>
					<input class="w3-select w3-white" type="date" name="fromDate"><br>
					<label class="w3-label w3-validate w3-text-black">From</label><br>
					<br>
					<div class="w3-btn-group">
					<input class="w3-btn-block deepblue w3-hover-blue w3-ripple w3-right" type="submit" name="addDisease" value="Add disease"/>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script>

		var modal = document.getElementById('id02');
		var modal2 = document.getElementById('id03');

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
			if (event.target == modal2) {
				modal.style.display = "none";
			}
		}

	</script>

	<script>
		function recp(id) {
			$('#myStyle').load(id);
		}
	</script>

	<div id='myStyle'>
		<?php require_once('userprofile2.php'); ?>
	</div>

</body>
</html>