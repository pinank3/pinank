<?php
	class tv{
		var $color="rgb";
		var $sound="Dolby";
		var $power=["on","off"];
		
		public function channel(){
			
			echo "Zee Tv";
		}
		public function newchannel(){

			echo 100;
			return "Star Tv";
			echo 1000;
		}
		const PI= 3.142;
	}
	$remote =new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

	echo $remote->color." ";
	echo $remote->sound." ";

	echo $remote->power[0].' ';
	echo $remote->power[1].' ';
	$remote->channel();
	echo "<br>";

	echo $remote->newchannel();
	echo "<br>";
	echo tv::PI;
?>