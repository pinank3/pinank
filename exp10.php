<?php
	$name="Pinank Parmar";

	$pattern="/^[a-zA-Z][a-zA-Z]{1,}[a-zA-Z]$/";

	$ans=preg_match($pattern, $name);
	//var_dump($ans);
	if($ans==0)
	{
		echo "valid";

	}
	else{
		echo "invalid";
	}
?>