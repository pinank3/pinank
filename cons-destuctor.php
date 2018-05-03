<?php
	class tv{
		function showchannel(){
			echo "SONY <br>"; 
		}
		function __construct(){
			echo "Constructor <br>";
		}
		function __destruct(){
			echo "Destructor <br>";
		}
	}
	$obj =new tv();
	$obj->showchannel();
	$obj1 =new tv();
	$obj1->showchannel();

?>