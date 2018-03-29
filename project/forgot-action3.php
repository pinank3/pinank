<?php
	session_start();
	$conn =new mysqli("localhost","root","","pinank");
	// print_r($_POST);
	// print_r($_SESSION);
	 if(empty($_POST['user_password'])||empty($_POST['user_cpassword'])||$_POST['user_password']!=$_POST['user_cpassword']){
	 	echo "please enter valid password";

	 }
	 else{
	 	$email=$_SESSION['emailid_for_forgot'];
	 // 	// echo $email;
	 	$newpass=sha1($_POST['user_password']);
	 	$q="update pi_users set user_password='$newpass',user_otp=0 where user_email='$email'";
	 	// echo $q;
	 	$re=$conn->query($q) or die ($conn->error);
	 	// var_dump($re);
	 	if($re){
	 		echo "ok";
	 	}
	 }

?>