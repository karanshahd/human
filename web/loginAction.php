<?php
   session_start();
   if(isset($_POST['login_button']))
      {
         include 'mysqli_connect.php';
         include 'cache_disable.php';
         $uname= $_POST['email'];
         $q = "select * from generalLogin where username='$uname';";
         $r = @mysqli_query ($dbc, $q); 
         $myrow = @mysqli_fetch_array ($r);
         if(($myrow['username']==$uname)&&($myrow['password']==$_POST['pwd']))
         {
         	  $_SESSION['uname']=$uname;
            $_SESSION['type']=$myrow['type'];
            if($myrow['type']=='doctor')
              header("Location: doctorprofile.php");
            else
              header("Location: profile.php");
         }
         else
         {
              header("Location: index.html");
         }
      }
?>