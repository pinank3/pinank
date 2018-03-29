<?php
session_start();
if(isset($_SESSION['pro_name'])){
	header('location:welcome.php');
}
?>
<form id="login_form">
	
	<input type="text" name="user_email" placeholder="ram@gmail.com"><br/>
	<input type="password" name="user_password" placeholder="a123"><br/>
	
	<input type="button" value="login" class="btn_login">
</form>
<div class="msg1">Hello</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="project.js"></script>