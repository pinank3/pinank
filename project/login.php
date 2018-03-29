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
						<h2>Login to your account</h2>
						<form id="login_form">
	
							<input type="text" name="user_email" placeholder="ram@gmail.com">
							<input type="password" name="user_password" placeholder="a123">
	
						<button type="button" class="btn btn-default btn_login" >Login</button>
					</form>
					<div class="msg1">Hello</div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input type="text" name="user_name" placeholder="ram">
							<input type="text" name="user_mobile" placeholder="9800498005">
							<input type="text" name="user_email" placeholder="ram@gmail.com">
							<input type="text" name="user_password" placeholder="a123">
							<input type="text" name="user_cpassword" placeholder="same as password">
							<button type="button" class="btn btn-default btn_register">Signup</button>
						</form>
						<div class="msg">Hello</div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php'; 
?>