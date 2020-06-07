<?php
   session_start();
      if(isset($_POST['finish']))
      {  include 'mysqli_connect.php';
         include 'cache_disable.php';
         $uname= $_POST['usrname'];
         $q = "select * from generalLogin where username='$uname';";
         $r = @mysqli_query ($dbc, $q); 
         $myrow = @mysqli_fetch_array ($r);
         if(($myrow['username']==$uname)&&($myrow['password']==$_POST['psw']))
         {
            $_SESSION['tmp']=$_SESSION['uname'];
            $_SESSION['uname']=$uname;
            header("Location: profile.php");
         }
         else
         {
            header("Location: doctorprofile.php");
         }
      }
      else
      {
      $_SESSION['uname']=$_SESSION['tmp'];
      header("Location: doctorprofile.php");
   }
?>