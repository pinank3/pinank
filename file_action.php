<?php
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	$dest="uploads/".rand(1000,9999).$_FILES['userprofile']['name'];
	$dest="uploads/".date("Y-m-d-h-i-s").$_FILES['userprofile']['name'];

	$temppath=$_FILES['userprofile']['tmp_name'];

	$ans=move_uploaded_file($temppath,$dest );

	var_dump($ans);

?>