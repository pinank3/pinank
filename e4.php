<?php 
	 $data =[100,200,300];

	 // echo $data;

	 print_r($data);
	 // print_r($data[0]);
	 // echo $data[0];
	 echo $data[0]+$data[1]+$data[2];
	 echo "<br/>";
	 echo array_sum($data);
	 echo "<br/>";
	 echo count($data);
	 echo "<br/>";
	 echo array_product($data);
	 echo "<br/>";
	unset($data[2]);
	print_r($data);
	$x=10;
	$y=20;
	echo $x;
	echo "<br/>";
	echo $y;
	echo "<br/>";
	unset($y);
	echo $x; echo $y;
?>