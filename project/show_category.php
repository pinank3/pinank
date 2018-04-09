<?php
require_once "header.php";
?>
<div class="container">
	<h1>Show Category</h1>
	<table class="table">
		<tr><th>Category Name</th><th>Delete</th></tr>
		<?php
			$record =get($conn,"select * from pi_category");
			if(is_array($record)):
			foreach ($record as $val):
		?>
	<tr>
		<td><?php echo $val->ca_name; ?></td>
		<td><button class="btn btn-cat-del" for="<?php echo $val->ca_id;?>">Delete</button></td>
	</tr>
	<?php
		endforeach;
		endif;
	?>
	</table>
</div>
<?php
require_once "footer.php";
?>