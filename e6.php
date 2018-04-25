<?php 
	$data = array(
		"name"=>"Pinank",
		"age "=>23,
		"place"=>"mumbai"
	);
	echo "<pre>";
	print_r($data);
	echo "</pre>";


	foreach ($data as $a => $b) {
		// echo $b;
		echo "<pre>";
		echo $a;
		echo "</pre>";

	}
	echo "<br/>";
	foreach ($data as $b) {
		echo "<pre>";
		echo $b;
		echo "</pre>";
	}

	for ($i=0;$i<3;$i++){
		$data1[$i]=100;
	}
	print_r($data1);

?>