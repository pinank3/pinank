<?php
class tv{
			var $color="rgb";
			var $sound="Dolby";
			protected $channel1="Zee";
			private $channel2="Star";

			public function showchannel(){
				echo "<hr />";
				echo "<pre>";
				print_r($this);
				echo "</pre>";

				echo $this->color." ";
				echo $this->sound." ";
				echo $this->channel1." ";
				echo $this->channel2;

		}
	}
	$remote =new tv;
	
	
	echo $remote->showchannel();
?>