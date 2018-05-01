<?php 
	session_start();
	echo "welcome".$_SESSION['username'];

?>
<a href="delete_session.php">Delete</a>