<?php 
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	
	$name =$_FILES["imgdata"]["name"];
	echo $name;

	$newdata =strrchr($name,".");
	//echo $newdata;

	$ext = ltrim($newdata,".");
	//echo $ext;

	if($ext=="png"||$ext=="jpg"||$ext=="jpeg"||$ext=="gif"){
		echo "valid";
	}
	else{
		echo "invalid";
	}
?>