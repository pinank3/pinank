<?php
	$dob="12/4/2000";
	echo $dob;
	$result = explode("/",$dob);
	echo "<br>";
	print_r($result);

	echo "<hr />";

	$arr=array(10,2,1990);

	print_r($arr);
	echo "<br>";
	echo implode('-',$arr);

	echo "<hr />";

	$dob="12/4/2000";
	echo $dob;
	list($date,$month,$year)=explode("/",$dob);
	echo "<br>";
	echo $year;
?>