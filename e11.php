<?php 
	print_r($_GET);
	echo "<br>";
	print_r($_REQUEST);
	echo "<br>";
	// print_r($_POST);

	foreach ($_GET as$val) {
		echo $val." ";
	}
?>