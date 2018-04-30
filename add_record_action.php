<?php
$conn=mysqli_connect("localhost","root","","pinank");
	// print_r($_POST);
	if(empty($_POST['username'])){
		echo "Enter name";
	}
	elseif(empty($_POST['username'])){
		echo "Enter name";
	}
	else{
		// echo "ok";
		$name=$_POST['username'];
		$sal=$_POST['usersalary'];


		$sql= "insert into person (pname,psalary) values ('$name','$sal')";
		// echo $sql;
		$result=$conn->query($sql) or die ($conn->error);
		// var_dump($result);
		if($result){
			header("location:get_data_table.php");
		}

	}
	
?>