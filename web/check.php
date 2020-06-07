<?php

if(isSet($_POST['username']))
{
$username = $_POST['username'];

require_once ('mysqli_connect.php'); 

$sql = "select * from generalLogin where username='$username'";
$sql_check = mysqli_query($dbc, $sql);

if(mysqli_num_rows($sql_check))
{
echo '<font color="red">The username is not available</font>';
}
else
{
echo '&nbsp;<img src="tick.gif" align="absmiddle">';
}

}
?>

