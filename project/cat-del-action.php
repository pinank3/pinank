<?php
	require_once "dbconnect.php";
	// print_r($_POST);
	$id= $_POST['catid'];

	$q="delete from pi_category where ca_id='$id'";
	$result=$conn->query($q) or die ($conn->error);
	if($result){
		echo "ok";
	}
?>