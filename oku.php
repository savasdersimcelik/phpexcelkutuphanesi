<?php

	error_reporting(E_ALL);
	set_time_limit(0);
	date_default_timezone_set('Europe/London');
	set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
	include 'PHPExcel/IOFactory.php';
	$inputFileName = 'veriler.xlsx';
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	foreach ($sheetData as $key => $value) {
		echo $value["A"] . '</br>';
		echo $value["B"] . '</br>';
		echo $value["C"] . '</br>';
		echo $value["D"] . '</br>';
		echo $value["E"] . '</br>';
	}

	

?>
