<?php
	include("e12.php");
	// echo "<pre>";
	// print_r($product_ar);
	// echo "</pre>";
?>
<table border="1" width="100" align="center">
	<tr>
		<?php
		foreach ($product_ar as $val) {
			echo "<td>";
			echo "<img src='$val[2]' />";
			echo "<h2>$val[1]</h2>";
			echo "<p>$val[0]</p>";
			echo "</td>";
		}
		?>
	</tr>
</table>