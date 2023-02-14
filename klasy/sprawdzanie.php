<?php

class Sprawdzenie
{
	public function sprawdzenie()
	{
		if(!isset($_SESSION['zalogowany']))
		{
			header("Location: logowanie.php");
			exit();
			session_unset();
}
	}
}

$wykonanie = new Sprawdzenie();
$wykonanie->sprawdzenie();

?>