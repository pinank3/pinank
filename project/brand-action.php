<?php
require_once 'dbconnect.php';
	if(empty($_POST['brand_name'])){
		echo "Please enter brand name";
	}
	else{
		$name=$conn->real_escape_string(strip_tags(trim($_POST['brand_name'])));
				$q="select count(br_name) as cnt from pi_brand where br_name='$name'";
		// echo $q;

		$result=$conn->query($q) or die($conn->error);
		// print_r($result);
		
		$anscnt =$result->fetch_array(MYSQLI_ASSOC);
		// print_r($anscnt);
		if($anscnt['cnt']>0){
			echo "brand exists";
		}
		else{
			$q="insert into pi_brand (br_name) values ('$name')";
			$res=$conn->query($q) or die ($conn->error);
			if($res){
				echo "ok";
			}
		}

	}
?>