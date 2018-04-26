<?php 
	$conn =mysqli_connect("localhost","root","","pinank");
	/*
	creat table person(
	id int auto_increment primary key,
	pname varchar(100),
	psalary int
	);
	*/
	$insert_q="insert into person (pname,psalary) values('Ajay',2000)";

	$result=mysqli_query($conn,$insert_q) or die (mysqli_error($conn));
	var_dump($result);

	mysqli_close($conn);
?>