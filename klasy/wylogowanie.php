<?php

class Wylogowanie
{
	public function wylogowanie()
	{
		if(isset($_POST['wyloguj']))
		{
		session_unset();
		header("Location: logowanie.php");
		mysql_close($polaczenie);
		}
	}
}

$wy = new Wylogowanie();
$wy->wylogowanie();

?>