<?php
	$conn = new mysqli("localhost","root","","pinank");
	// print_r($_POST);
	// print_r($_FILES);

	if(empty($_POST['pro_name'])){
		echo "Please enter product name";
	}
	else if(empty($_POST['pro_price']) || !is_numeric($_POST['pro_price'])){
		echo "Please enter valid product price";
	}
	else if(empty($_POST['pro_discount']) || !ctype_digit($_POST['pro_discount'])){
		echo "Please enter valid Discount";
	}
	else if(empty($_POST['pro_caid'])){
		echo "Please select category";
	}
	else if(empty($_POST['pro_brid'])){
		echo "Please enter Brand";
	}
	else if(empty($_POST['pro_description'])){
		echo "Please enter product description";
	}
	else if(empty($_FILES['pro_path']['name'])){
		echo "Please enter product image";
	}
	else if($_FILES['pro_path']['size'] > 1024*1024*2){
		echo "Please enter product size upto 2MB";
	}
	else if($_FILES['pro_path']['type']=="image/jpeg" || $_FILES['pro_path']['type']=="image/jpg" || $_FILES['pro_path']['type']=="image/png" || $_FILES['pro_path']['type']=="image/gif"){

		$name = $_FILES['pro_path']['name'];
		$tmp = $_FILES['pro_path']['tmp_name'];

		$dest = "uploads/".time().$name;
		if(move_uploaded_file($tmp, $dest)){
			// echo "ok";

			$pro_name = $conn->real_escape_string(strip_tags(trim($_POST['pro_name'])));
			$pro_price = $conn->real_escape_string(strip_tags(trim($_POST['pro_price'])));
			$pro_discount = $conn->real_escape_string(strip_tags(trim($_POST['pro_discount'])));
			$pro_caid = $conn->real_escape_string(strip_tags(trim($_POST['pro_caid'])));
			$pro_brid = $conn->real_escape_string(strip_tags(trim($_POST['pro_brid'])));
			$pro_desc = $conn->real_escape_string(strip_tags(trim($_POST['pro_description'])));

			$q = "insert into pi_product (pro_name,pro_price,pro_discount,pro_caid,pro_brid,pro_description,pro_path) value ('$pro_name','$pro_price','$pro_discount','$pro_caid','$pro_brid','$pro_desc','$dest')";

			$result = $conn->query($q) or die ($conn->error);
			if($result){
				echo "ok";
			}
		}
	}
	else{
		echo "select proper file";
	}

?>