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
	<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />

<SCRIPT type="text/javascript">

pic1 = new Image(16, 16); 
pic1.src="loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == '&nbsp;<img src="tick.gif" align="absmiddle">')
	{ 
		$("#status").html(msg);
	}  
	else 
	{  
		$("#status").html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">' +
'The username should have at least <strong>4</strong> characters.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->

</SCRIPT>


</head>

<body>

<style type="text/css">

  body
  {
    background-color: #c8eaf7;
  }

	.disp-tm{position:absolute;left:30%;top:55;transform:translate(-30%,55%);-ms-transform:translate(-30%,55%)}

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

<div class=" w3-row-padding w3-container blueback w3-center w3-threequarter">
    <div class="w3-display-container w3-padding-32" style="max-height: 500px">
      <h1 class="w3-text-white" style="font-weight: bold">REGISTRATION</h1>
        </div>
      </div>

</div>

<div class="bgimage2 w3-quarter w3-display-topright"></div>


	<div class="w3-card-4 w3-half disp-tm">

		<div class="w3-container blueback">
  			<h2>Login Details</h2>
		</div>

		<form class="w3-form w3-white" id="register1" onsubmit="return validate()" action="register.php" method="post" enctype="multipart/form-data">

			<div class="w3-group">      
				<input class="w3-input" type="text" name="username" id="username">
				<label class="w3-label w3-validate w3-text-black">Choose username&nbsp;</label>
				<p id="status"></p>
				<br>
			</div>

			<div class="w3-group">      
				<input class="w3-input" type="password" name="pwd" id="pwd">
				<label class="w3-label w3-validate w3-text-black">Password</label><br>
			</div>

			<div class="w3-group">      
				<input class="w3-input" type="password" name="cpwd" id="cpwd">
				<label class="w3-label w3-validate w3-text-black">Confirm Password</label><br>
			</div>

			<div class="w3-group w3-half">
				<input class="w3-btn-block w3-white" name="userImage" type="file"/><br>
				<label class="w3-label w3-validate w3-text-black">Potrait photograph</label><br>
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

</div>

<script type="text/javascript">

function validate()
	{
    var password = document.getElementById("pwd").value;
    var confirmPassword = document.getElementById("cpwd").value;
    if (document.getElementById("pwd").value) {
		
	}
	else
	{
		return false;
	}
	if (document.getElementById("username").value) {
		
	}
	else
	{
		return false;
	}
	if(password != confirmPassword)
	{
		return false;
	}
	else
	{
		
	}
	return true;

}

</script>
	
</body>
</html>
