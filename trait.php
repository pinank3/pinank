<?php
	trait pdf{

		function showpdf(){echo "predefinedfile";}
	}

	trait excel{

		function showexcel(){echo " excelsheet ";}
	}

	trait sms{}
	trait email{}

	class project{
		use pdf;
		use excel;
	}

	$obj =new project();
	$obj->showpdf();
	$obj->showexcel();

?>