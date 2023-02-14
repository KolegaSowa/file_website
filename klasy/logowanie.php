<?php
class Logowanie extends Polaczenie
{
	public function logowanie()
	{
		if(isset($_POST['log'])&&isset($_POST['login'])&&isset($_POST['haslo']))
		{
			// pobranie danych z formularza
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			$dane = "SELECT ID_osoby FROM uzytkownik WHERE login='$login' AND haslo='$haslo'";
			$spr_dane = mysqli_query($this->polaczenie,$dane);
			$wynik = mysqli_num_rows($spr_dane);

			if($wynik==1)
			{
				//pobieranie ID użytkownika
				$wiersz = $spr_dane->fetch_assoc();
				$_SESSION['ID'] = $wiersz['ID_osoby'];

				//ustawienie statusu zalogoania
				$_SESSION['zalogowany'] = true;

				//przeniesienie na stronę główną
				header("Location: index.php");
				mysql_close($this->polaczenie);
			}
			else
			{
			header("Location: logowanie.php");
			mysql_close($this->polaczenie);
			}
		}
	}
}

$logowanie = new Logowanie();
$logowanie->logowanie();
?>