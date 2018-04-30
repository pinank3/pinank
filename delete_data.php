<?php 
	$conn=mysqli_connect("localhost","root","","pinank");
	// print_r($_GET);
	$id=$_GET['xyz'];
	// echo $id;
	$sql="delete from person where id='$id'";
	$result=$conn->query($sql) or die($conn->error);
	if($result){
		header("location:get_data_table.php");
	}
?>