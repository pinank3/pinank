<?php
	abstract class tv{
		function showchannel(){
			echo "DD Tv";
		}
	}
	class sonytv extends tv{
		function showchannel(){
			echo "Sony tv"." ";
			// $this->showchannel();
			tv::showchannel()." ";
			echo "<br>";
			parent::showchannel();
		}
	}
	$remote =new sonytv();
	$remote->showchannel();
?>