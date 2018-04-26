<?php
	// if(session_id() == "")
	// {
	// 	session_start();
	// }
	// // print_r($_SESSION);
	$conn = new mysqli("localhost","root","","pinank");
	echo "<pre>";
	print_r($conn);
?>