<?php
$data=["php","mysql","ajax"];
//echo $data;
print_r($data);
echo $data[0];
echo $data[1];
echo $data[2];

echo "<hr>";
for ($i=0; $i<count($data); $i++) { 
	echo $data[$i];
	# code...
}
echo "<hr>";
$i=0;
 while( $i<count($data) ) { 
	echo $data[$i];
	$i++;
}
echo "<hr>";
foreach ($data as $ans) {
	# code...
	echo $ans;
}
?>