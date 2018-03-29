<?php
	$data =$_POST["imgdata"];
	//echo $data;

	$newdata =strrchr($data,".");
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