<?php
	calculate(10,22,2);

	function calculate($a,$b,$type){
		
		if($type == 1)
		{
			echo $a+$b;
		}
		elseif($type == 2)
		{
			echo abs($a-$b);
		}
		elseif($type == 3)
		{
			echo $a*$b;
		}
		elseif($type == 4)
		{
			echo round($a/$b,2);
		}	

	}
?>