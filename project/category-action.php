<?php
$conn = new mysqli("localhost","root","","pinank");
// print_r($_POST);
	if(empty($_POST['cat_name'])){
		echo "Please enter category name";
	}
	else{
		$name=$conn->real_escape_string(strip_tags(trim($_POST['cat_name'])));
				$q="select count(ca_name) as cnt from pi_category where ca_name='$name'";
		// echo $q;

		$result=$conn->query($q) or die($conn->error);
		// print_r($result);
		
		$anscnt =$result->fetch_array(MYSQLI_ASSOC);
		// print_r($anscnt);
		if($anscnt['cnt']>0){
			echo "category exists";
		}
		else{
			$q="insert into pi_category (ca_name) values ('$name')";
			$res=$conn->query($q) or die ($conn->error);
			if($res){
				echo "ok";
			}
		}

	}
?>