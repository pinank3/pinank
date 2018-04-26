<?php 
	$conn =mysqli_connect("localhost","root","","pinank");

	$update_q="update person set pname='Akshay' ,psalary=20000 where id=1";

	$result=mysqli_query($conn,$update_q) or die (mysqli_error($conn));
	var_dump($result);

	mysqli_close($conn);
?>