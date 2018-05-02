<?php
	class tv{
		var $color="rgb";
		var $sound="Dolby";

	}
	// $remote =tv();
	// $remote=tv;

	$remote=new tv();
	$remote = new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

	echo $remote->color;
	echo $remote->sound;

	echo "<br>";

	foreach ($remote as  $val) {
		echo $val;
	}
?>