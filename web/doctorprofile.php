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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!DOCTYPE html>
<html>

<title>H.U.M.AN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<link href="google_font.css" rel="stylesheet">
<script src="jquery-3.1.1.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('Images/loading.gif') center no-repeat #fff;
}


	.blueback{color:#fff!important;background-color:#007bb5!important}
	.deepblue{color:#fff !important; background-color:#233c83 !important}

</style>

<script src="jquery-1.2.6.min.js"></script>
<script src="modernizr.js"></script>
<script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

<body>
<div class="se-pre-con"></div>

<?php
  require_once ('mysqli_connect.php');
?>   

<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar blueback w3-left-align">
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left w3-padding-large w3-hover-white w3-large w3-black"><i class="material-icons w3-large w3-margin-right">local_pharmacy</i></a>
		<a href="#" class="w3-light-grey w3-btn w3-hide-small w3-mobile w3-bar-item"><i class="material-icons w3-large w3-margin-right">local_pharmacy</i>HUMAN</a>
		<button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="recp('dprofile.php')" id="prof">Patients</button>
		<button class="w3-mobile w3-bar-item w3-btn w3-hide-small w3-hover-white" onclick="recp('analytics.php')" id="analy">Analytics</button>

		<button class="w3-mobile w3-bar-item w3-right w3-hide-small w3-btn w3-hover-white" id="logout">Logout</button>
	</div>

	<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Patients</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Analytics</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>

</div>

<script>
function recp(id) {
  $('#myStyle').load(id);
}
</script>

<div id='myStyle'>
<?php require_once('dprofile.php'); ?>
</div>

<div id="id02" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom">
		<header class="w3-container blueback"> 
			<h2>Confirm exit</h2>
		</header>

		<div class="w3-container">

			<div class="w3-section">
				<p>Are you sure you want to logout?</p>
			</div>

			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-left w3-red">Cancel</button>
				<button class="w3-button w3-right deepblue" type="submit" onclick="reDirect()">Confirm</button>
			</div>

		</div>
	</div>
</div>



 <script type="text/javascript">
 	logout.addEventListener('click', function(event) {
 		document.getElementById('id02').style.display='block';
 	});

	function reDirect()
	{
		window.location.href='logout.php';
	}

</script>
</body>
</html>

