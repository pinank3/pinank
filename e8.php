<?php
	$y=10;
	if(isset($y)){
		echo $y;
	}
	else{
		echo "Does not exist";
	}
	echo "<br/>";
	define('USER','Rohit',true);
	if(defined('USER')){
		echo USER;

	}
	else {
		echo 'does not exist';
	}
?>