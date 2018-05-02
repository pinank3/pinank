<?php
	abstract class tv{
		public $color="rgb";
		public $sound="dolby";

	}
	class sonytv extends tv{
		public $smarttv="Android";

	}
	$remote =new sonytv();
	echo "<pre>";
	print_r($remote);
	echo "</pre>";
?>