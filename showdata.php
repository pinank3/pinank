<?php 
	$conn = new mysqli("localhost","root","","pinank");

	$q= "select name,salary,id from users";
	//echo $q;

	$result = $conn->query($q);

	//echo "<pre>";
	//print_r($result);
	//echo "</pre>";

	if($result->num_rows > 0){

		while ($ans = $result->fetch_array(MYSQLI_ASSOC)) {
			//echo "<pre>";
			//print_r($ans);
			//echo "</pre>";
			//$name=$ans['name'];
			$id=$ans['id'];
			echo "<div>";
			echo $ans['name']."&nbsp";
			echo $ans['salary']."&nbsp";
			echo $ans['id']."&nbsp";
			echo "<a href='deleteData.php?userid=$id'>Delete</a>";
			//echo "<a href='deleteData.php?userid=$name'>Delete</a>";
			echo "</div>";
		}
	}
	else{
		echo "no data";
	}
	$conn->close();
?>