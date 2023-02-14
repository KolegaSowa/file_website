<?php

class Polaczenie
{
	protected $host = 'localhost';
	protected $uzytkownik = 'root';
	protected $haslo = '';
	protected $baza = 'archiwum';

	public $polaczenie;

	public function __construct()
	{
		$this->polaczenie = new mysqli($this->host,$this->uzytkownik,$this->haslo,$this->baza);

		if($this->polaczenie->connect_error)
		{
			echo "BŁĄD".$this->pol->connect_error;
		}
		else
		{
			//echo "POŁĄCZENIE";
		}
	}
	
}

$p1 = new Polaczenie();

?>