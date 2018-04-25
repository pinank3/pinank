<?php
	$data= array(10,50,30,20);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	// sort($data);
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// rsort($data);
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// asort($data);
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// arsort($data);
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// krsort($data);
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	ksort($data);
	echo "<pre>";
	print_r($data);
	echo "</pre>";

?>
