<?php
	session_start();
	if(!isset($_SESSION['pro_name'])){
		header("location:login.php");
	}
?>
<form id="password_form">
	<input type="password" name="cpass" placeholder="current password"><br/>
	<input type="password" name="npass" placeholder="new password"><br/>
	<input type="password" name="cnpass" placeholder="confirm new password"><br/>
	<input type="button" value="update" class="btn_pass">
</form>
<div class="msg">Hello</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="project.js"></script>