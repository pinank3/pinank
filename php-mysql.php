<?php 
	//$ans =mysqli_connect("localhost","root","","pinank");
	$ans= new mysqli("localhost","root","","pinank");
	print_r($ans);


	//$res=mysqli_close($ans);
	$res= $ans->close();
	var_dump($res);
?>