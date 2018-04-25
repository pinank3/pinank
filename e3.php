<?php 
	input("file");

	function input($type){
		echo "<input type ='$type'/>";

		}

	table (3,5);

	function table($col,$rows){
		echo"<table border='1'>";
		for($i=1;$i<=$rows;$i++){
			echo"<tr>";
		for($j=1;$j<=$col;$j++){
			echo "<td>";
			echo "test";
			echo "</td>";
		}
			echo"</tr>";
		}
		echo"</table>";

	}
?>