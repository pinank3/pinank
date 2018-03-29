<?php
	session_start();
	if(isset($_SESSION['pro_name'])){
		header("location:index.php");
	}
	require_once 'header.php'; 
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Forgot Password Form</h2>
						<form id="forgot1_form">
						<input type="text" name="user_email" placeholder="pinank3@gmail.com"><br>
						<input type="button" value="send otp" class="btn_forgot1"/>
	
						</form>

						<form id="forgot2_form">
						<input type="text" name="user_otp" placeholder="Enter otp"><br>
						<input type="button" value="check otp" class="btn_forgot2"/>
	
						</form>

						<form id="forgot3_form">
						<input type="password" name="user_password" placeholder="new password"><br>
						<input type="password" name="user_cpassword" placeholder="confirm new password"><br>
						<input type="button" value="update password" class="btn_forgot3"/>
	
						</form>

						<div class="msg">hello</div>
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php'; 
?>