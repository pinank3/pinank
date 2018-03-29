<?php 
	session_start();
	//print_r($_POST);
	$conn = new mysqli("localhost","root","","pinank");
	if(empty($_POST['user_email'])){
		$msg="Please enter emailid";
	}
	elseif(empty($_POST['user_password'])){
		$msg="Please enter password ";
	}
	else{
		$uemail=$conn->real_escape_string(strip_tags(trim($_POST['user_email'])));
		$upass=sha1($conn->real_escape_string(strip_tags(trim($_POST['user_password']))));
		//echo $upass;
		$q="select * from pi_users where user_email='$uemail'";
		//echo $q;

		$result=$conn->query($q) or die($conn->error);
		//print_r($result);

		if($result->num_rows >0){
			$ans=$result->fetch_array(MYSQLI_ASSOC);
			// print_r($ans);
			$dbpass=$ans['user_password'];
			//echo $dbpass;
			if($upass==$dbpass){
				$_SESSION['pro_id']=$ans['user_id'];
				$_SESSION['pro_name']=$ans['user_name'];
				$_SESSION['pro_mobile']=$ans['user_mobile'];
				$_SESSION['pro_email']=$ans['user_email'];
				$_SESSION['pro_status']=$ans['user_status'];
				$msg="ok";
			}
			else{
				$msg="invalid password";
			}
			

		}
		else{
				$msg="emailid does not exist";
			}
	}

	echo $msg;
?>