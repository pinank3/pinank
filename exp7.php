<?php
$data = array(
	0=>[1,"Pinank",20],
	1=>[1,"nilesh",21],
	2=>[1,"akash",22]
 );
echo "<pre>";
print_r($data);
echo "</pre>";

foreach ($data as $ans) {
	# code...
	echo "<p>";
	echo $ans[0];
	echo $ans[1];
	echo $ans[2];
	echo "</p>";	
}

?>