<?php 
	echo "<pre>";
	print_r($_FILES);

	$name=$_FILES['imgdata']['name'];
	echo $name;
	
	$tmp=$_FILES['imgdata']['tmp_name'];
	echo $tmp;

	$result=move_uploaded_file($tmp, $name);
	var_dump($result);

?>