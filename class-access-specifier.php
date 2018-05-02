<?php
class tv{
		var $color="rgb";
		var $sound="Dolby";
		protected $channel1="zEE";
		private $channel2="Star";

		public function showchannel(){
			echo "<hr />";
			$color ="hexa";
			echo $color;
		}
	}
	$remote =new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

	echo $remote->color." ";
	echo $remote->sound." ";
	// echo $remote->channel1." ";
	// echo $remote->channel2." ";
	
	echo $remote->showchannel();
?>