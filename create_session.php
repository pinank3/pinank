<?php
	session_start();
	echo session_id();
	$_SESSION['username']='Ajay';
?>
<a href="show_session.php">Show</a>