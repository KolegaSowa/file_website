<?php

class Pobieranie
{
	public function pobieranie()
	{
		$fileName = basename($_GET['file']);
		$filePath = "../pliki/".$fileName;

		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

		readfile($filePath);
		exit;
	}
}

$pob = new Pobieranie();
$pob->pobieranie();

?>