<?php
	// class a {
	// 	protected $data=100;

	// }
	// class b extends a{
	// 	function show(){
	// 		echo$this->data;
	// 	}
	// 	function set($newdata){
	// 		$this->data=$newdata;
	// 	}
	// }
	// $obj=new b;
	// $obj->show();
	// $obj->set(200);
	// $obj->show();	
// you can modify protected member via extended class  members
/////////////////////////////////////////////////////////////////////////////////////////////////

	interface a{
		const data1= 100 ;
	}
	interface b{
		const data2= 100;
	}
	class c implements a,b{
		function show(){
				echo self::data1." ";
				echo self::data1." ";
				echo a::data1." ";
				echo b::data2;
				// echo a::data1 * b::data2;
		}
	}
	$obj = new c();
	$obj->show();
?>