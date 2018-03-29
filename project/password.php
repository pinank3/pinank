<?php
	session_start();
	if(!isset($_SESSION['pro_name'])){
		header("location:index.php");
	}
	require_once 'header.php'; 
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Password Form</h2>
						<form id="password_form">
							<input type="password" name="cpass" placeholder="current password"><br/>
							<input type="password" name="npass" placeholder="new password"><br/>
							<input type="password" name="cnpass" placeholder="confirm new password"><br/>
							<input type="button" value="update" class="btn_pass">
						</form>
					<div class="msg">Hello</div>
					</div><!--/login form-->
				</div>
				
					
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php'; 
?>