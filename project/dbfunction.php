<?php
	function get($conn ,$str){
		// print_r($conn);
		
		$re=$conn->query($str) or die ($conn->error);
		// print_r($re);
		if($re->num_rows > 0){
			while($ans=$re->fetch_object()){
				// echo "<pre>";
				// print_r($ans);
				// echo "</pre>";
				$data[]=$ans;
			}
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				return $data;
		}
		else{
			return 0;
		}
	}
?>