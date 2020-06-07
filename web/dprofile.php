<?php
session_start();
?>

<!DOCTYPE html>
<html>

<title>H.U.M.AN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="google_font.css" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.imageh{max-width:100%;height:300px;max-height:100%;object-fit: contain;  margin:auto;
  display:block}
  .blueback{color:#fff!important;background-color:#007bb5!important}
  .deepblue{color:#fff !important; background-color:#233c83 !important}

  a {
    text-decoration:none;
  }

  body
  {
    background-color: #c8eaf7;
  }

</style>
<body>

<?php

  require_once ('mysqli_connect.php');

  if (!(isset($_SESSION['uname']) && $_SESSION['uname'] != '')) {
    header ("Location: index.html");
  }

?>

<?php
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', 'karan123');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'human');

	$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
	$uname=$_SESSION['uname'];
    $sql = "select * from basicinfo b left outer join currentdisease c on b.username=c.username where doctor='".$uname."' UNION select * from basicinfo b right outer join currentdisease c on b.username=c.username where doctor='".$uname."';";
    $r = mysqli_query($dbc,$sql);
    ?>

  <div id="images" class="w3-container w3-row-padding w3-padding-16" style="margin-top: 2.5%">
  <?php while($row = mysqli_fetch_array($r))
        {

   				echo '<div class=" w3-card-4 w3-white w3-margin-bottom w3-margin-left w3-margin-right w3-container" style="float:left;width:48.1%" id='.$row["username"].' onclick="javascript:login(this.id)">';
          echo '<img src="data:'.$row['imageType'].';base64,'.base64_encode( $row['imageData'] ).'" class="imageh w3-half" />';
          echo '<div class="w3-half w3-container w3-center">';
          echo '<p class="w3-xxlarge w3-bold">'.$row['name'].'</p>';
          echo '<hr>';
          echo '<p class="w3-large w3-bold">'.$row['contact'].'</p>';
          echo '<p class="w3-large w3-bold">'.$row['emailid'].'</p>';
          echo '<p class="w3-large w3-bold">'.$row['address'].'</p>';
          echo '</div>';
          echo '</div>';
		    }
  ?>
  </div>
    

<script type="text/javascript">
	function login(clicked_id)
	{
		  document.getElementById('user').innerHTML=clicked_id;
    	document.getElementById('id01').style.display='block';
	}
</script> 
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom">
    <div class="w3-container">
		<div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <p>Welcome User : </p><p id="user"></p>
      </div>

      <form class="w3-container"  method="post" action="validate.php">
        <div class="w3-section">
          <input class="w3-input" type="text" placeholder="Enter Username" name="usrname" id="usrname" required>
          <input class="w3-input" type="password" placeholder="Enter Password" name="psw" id="psw" required>
        </div>
        <button class="w3-btn-block w3-block deepblue w3-section w3-padding" name="finish" type="submit">Login</button>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <a href="#" class="w3-right w3-text-blue">Forgot password?</a>
      </div>

    </div>
  </div>
    </div>
  </div>
</div>

<footer class="w3-bottom blueback w3-center">
  <p class="w3-xlarge">Powered by <a href="#">H.U.M.AN</a></p>
</footer>

</body>
</html>

