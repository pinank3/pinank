<?php  
	$conn=mysqli_connect("localhost","root","","pinank");

	$sql="select * from person";
	echo $sql;

	$result=$conn->query($sql) or die($conn->error);
	echo "<pre>";
	print_r($result);
	echo "</pre>";

	while($ans= $result->fetch_array(MYSQLI_ASSOC))
	{
	echo "<pre>";
	print_r($ans);
	echo "</pre>";	
	}
?>