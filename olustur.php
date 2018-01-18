<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
	include 'PHPExcel/IOFactory.php';
	$Excel = new PHPExcel();

	$Excel->getProperties()->setCreator("Tam Liste")
	setLastModifiedBy("Tam Liste")
	->setTitle("Tam Liste")
	->setSubject("Tam Liste")
	->setDescription("Tam Liste")
	->setKeywords("Tam Liste")
	->setCategory("Tam Liste");
	$Excel->getActiveSheet()->setTitle('Sayfa1');

	$Excel->getActiveSheet()->setCellValue('A1', 'Adı');
	$Excel->getActiveSheet()->setCellValue('B1', 'Soyadı');
	$Excel->getActiveSheet()->setCellValue('C1', 'Telefon');
	$Excel->getActiveSheet()->setCellValue('D1', 'ePosta');
	$tur = 2;

	/**
	* Eğer bir dizininiz varsa foreach kullanabilirsiniz.
	*/
	foreach($kullanicilar as $kullanici){
		$Excel->getActiveSheet()->setCellValue("A$tur", "Savaş Dersim");
		$Excel->getActiveSheet()->setCellValue("B$tur", "Çelik");
		$Excel->getActiveSheet()->setCellValue("C$tur", "05078614659");
		$Excel->getActiveSheet()->setCellValue("D$tur", "savasdersimcelik@gmail.com";
		$tur++;
	}
		$Kaydet = PHPExcel_IOFactory::createWriter($Excel, 'Excel5');
		$Kaydet->save("excel.xls");


?>