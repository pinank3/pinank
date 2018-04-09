<?php 
	require_once 'dbconnect.php';
	if(empty($_POST['user_name'])){
		$msg="Please enter name";
	}
	else if(empty($_POST['user_mobile'])){
		$msg="Please enter mobile";
	}
	elseif(empty($_POST['user_email'])){
		$msg="Please enter emailid";
	}
	else if(empty($_POST['user_password'])){
		$msg="Please enter password";
	}
	else if($_POST['user_cpassword']!=$_POST['user_password']){
		$msg="Please enter correct password";
	}
	else{
		$uname=$conn->real_escape_string(strip_tags(trim($_POST['user_name'])));
		$umob=$conn->real_escape_string(strip_tags(trim($_POST['user_mobile'])));
		$uemail=$conn->real_escape_string(strip_tags(trim($_POST['user_email'])));
		$upass=sha1($conn->real_escape_string(strip_tags(trim($_POST['user_password']))));
		echo $upass;
		$q="select count(user_id) as cnt from pi_users where user_email='$uemail'";
		//echo $q;e
		//$msg="ok";
		$res=$conn->query($q) or die($conn->error);
		//print_r($res);
		$anscnt=$res->fetch_array(MYSQLI_ASSOC);
		if($anscnt['cnt'] > 0){
			$msg="emailid exists";
		}
		else{
			$q="insert into pi_users(user_name,user_mobile,user_email,user_password) values('$uname','$umob','$uemail','$upass')";
			$conn->query($q) or die($conn->error);
			$msg="ok";
			/*********************************************/
			
	// 	// Authorisation details.
	// 	$username = "pinank3@gmail.com";
	// 	$hash = "550a5506d3406f73ea0a6fc4bd209678bac64e1776ec9fac922b055ef1eb0cc0";

	// // Config variables. Consult http://api.textlocal.in/docs for more info.
	// $test = "0";

	// // Data for text message. This is the text message data.
	// $sender = "TXTLCL"; // This is who the message appears to be from.
	// $numbers = "91$umob"; // A single number or a comma-seperated list of numbers
	$message = "Hey I am Php programmer i want qualification with UI developer 
	 call me at 9722229533 ";
	// // 612 chars or less
	// // A single number or a comma-seperated list of numbers
	// $message = urlencode($message);
	// $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	// $ch = curl_init('http://api.textlocal.in/send/?');
	// curl_setopt($ch, CURLOPT_POST, true);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $result = curl_exec($ch); // This is the result from the API
	// print_r($result);
	// curl_close($ch);

			/********************************************/
			$to=$uemail;
			$subject="hii";
			$txt=$message;
			$headers="From:<vishal@php-training.in>";
			$res=mail($to,$subject,$txt,$headers);
			var_dump($res);
		}

	}
	echo $msg;
?>