<?php
 session_start();
 if(!isset($_SESSION['pro_name'])){
 	header("location:login.php");
 }
 // echo session_id();
 // print_r($_SESSION);
  echo "welcome".$_SESSION['pro_name'];
?>
<a href="password.php">update password</a>
<a href="logout.php">logout</a>