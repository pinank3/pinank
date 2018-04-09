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
						<h2>Product Form</h2>
						<form id="product_form">
							<input type="text"  placeholder="Men Kurta" name="pro_name">
							<input type="text"  placeholder="2500" name="pro_price">
							<input type="text"  placeholder="25 %" name="pro_discount">
							<select name="pro_caid">
								<option value="">Please Select Category</option>
								<?php
									$record = get($conn, "select * from pi_category");
									if(is_array($record)):
										foreach($record as $val):
								?>
								<option value="<?php echo $val->ca_id ?>">
									<?php
									echo $val->ca_name;
									?>
								</option>

								<?php
								endforeach;
								endif;
								?>
							</select>
							
							<br>
							<br>
							<select name="pro_brid">
								<option value="">Please Select Brand</option>
								<?php
									$record = get($conn, "select * from pi_brand");
									if(is_array($record)):
										foreach($record as $val):
								?>
								<option value="<?php echo $val->br_id ?>">
									<?php
									echo $val->br_name;
									?>
								</option>

								<?php
								endforeach;
								endif;
								?>
							</select>
							<br>
							<br>
							<input type="file" name="pro_path" >
							<textarea name="pro_description"></textarea>
							<button type="button" class="btn btn-default btn_product">Upload Product</button>
						</form>
						<div class="msg">Hello</div>
					</div><!--/login form-->
				</div>
				
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php';
?>