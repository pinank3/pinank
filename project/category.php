<?php
	session_start();
	if(!isset($_SESSION['pro_name'])){
		header("location:index.php");
	}
	if($_SESSION['pro_status']!=1){
		header("location:index.php");
	}
	require_once 'header.php'; 
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Category</h2>
						<form id="category_form">
	
							<input type="text" class="cat_name" name="cat_name" placeholder="Mens wear">
							
						<button type="button" class="btn btn-default btn_category" >Add Category</button>
					</form>
					<div class="msg">Hello</div>
					</div><!--/login form-->
				</div>
				
					<div class="signup-form"><!--sign up form-->
						<h2>Show category</h2>
						<?php
						$q="select * from pi_category";
						$re=$conn->query($q) or die ($conn->error);
						// print_r($re);
						if($re->num_rows>0){
							echo "<ul class='category_data'>";
							while($ans=$re->fetch_object()){
								echo "<li>";
								echo $ans->ca_name;
								echo "</li>";
							}
							echo "</ul>";
						}
						?>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php'; 
?>