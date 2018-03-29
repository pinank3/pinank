<?php 
$conn= new mysqli("localhost","root","","pinank");
//print_r($conn);
//print_r($_REQUEST);
if(empty($_REQUEST['username'])){
	echo "invalid name";
}
elseif(empty($_REQUEST['userSalary']) || !ctype_digit($_REQUEST['userSalary'])){
	echo "Invalid salary";
}
else {

		$uname =$conn->real_escape_string(strip_tags(trim($_REQUEST['username'])));
		//echo $uname;
		$usal =$conn->real_escape_string(strip_tags(trim($_REQUEST['userSalary'])));
		$q="insert into users (name,salary) values('$uname','$usal')";
		//echo $q;

$result = $conn->query($q);
//var_dump(result);
if($result){
	echo "Success";
}
else{
	die($conn->error);
}
}
$conn->close();
?>