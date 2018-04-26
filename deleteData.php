<?php 
	$conn = new mysqli("localhost","root","","pinank");

	//print_r("test");
	//print_r($_GET);
	$rec=$_REQUEST['userid'];
	//$rec=$_REQUEST['username'];
	//echo $rec;
	//print_r($_REQUEST['userid']);
	$q="delete from users where id='$rec'";
	//$q="delete from users where name='$rec'";
	//echo $q;
	$result= $conn->query($q);
	if($result){
		//echo "delete
		header("location:showdata.php");
	}
	else{
		die($conn->error);
	}
	$conn->close();
?>