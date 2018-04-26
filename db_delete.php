<?php 
	$conn =mysqli_connect("localhost","root","","pinank");

	$delete_q="delete from person where id=1";

	$result=mysqli_query($conn,$delete_q) or die (mysqli_error($conn));
	var_dump($result);

	mysqli_close($conn);
?>