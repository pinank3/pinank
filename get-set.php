<?php
	class user_record{
		private $username="admin";
		protected $password="1234";

		function getdata(){
			echo $this->username." ";
			echo $this->password;
		}
		function setdata($newuser,$newpass){
			$this->username=$newuser;
			$this->password=$newpass;
		}
	}
	$obj = new user_record();
	echo "<pre>";
	print_r($obj);
	echo "</pre>";

	$obj->getdata();
	$obj->setdata('xyz','26784');
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
	$obj->getdata();
?>