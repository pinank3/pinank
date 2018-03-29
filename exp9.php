<?php 
	$data=array('Pinank',"Mahesh","Parmar" );
	print_r($data);

	echo implode(" ", $data);
	echo "<br />";

	$dob="6/9/1994";
	echo $dob;

	$ans= explode("/", $dob);
	print_r($ans);
?>