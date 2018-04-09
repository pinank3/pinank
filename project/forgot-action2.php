<?php
require_once 'dbconnect.php';
if(empty($_POST['user_otp'])|| !ctype_digit($_POST['user_otp'])|| strlen($_POST['user_otp'])!=4){
	echo "invalid otp";
}
else{
	$otp=$_POST['user_otp'];
	// echo $otp;
	$email=$_SESSION['emailid_for_forgot'];
	$q="select user_otp from pi_users where user_email='$email'";
	$re=$conn->query($q) or die($conn->error);
	// print_r($re);
	$otpdata=$re->fetch_object();
	// print_r($otpdata);
	if($otpdata->user_otp!=$otp){
		echo "mismatch otp";
	}
	else{
		echo "ok";
	}
}
?>