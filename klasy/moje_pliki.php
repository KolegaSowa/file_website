<?php

class Moje extends Polaczenie
{
	public function moje_pliki()
	{
		$ja = $_SESSION['ID'];
		$fraza = $_POST['pas'];

		$szukanie = null;

		if(isset($_POST['lupa'])&&($fraza!=null))
		{	
			//wyłączenie podstawowego wyświetlania
			$szukanie = true;
			//zapytanie do bazy
			$zapytanie = "SELECT ID_pliku, ikona, nazwa FROM plik WHERE wlasciciel = '$ja' AND nazwa LIKE '$fraza%'";

		}

		if($szukanie==null)
		{
			$zapytanie = "SELECT ID_pliku, ikona, nazwa FROM plik WHERE wlasciciel = '$ja'";
		}

		//wyśietlanie bazy
		$wyswietlanie = mysqli_query($this->polaczenie, $zapytanie);
		while($komorka = mysqli_fetch_array($wyswietlanie))
		{
			$nazwa = $komorka['nazwa'];
			$kosz = $komorka['ID_pliku'];
			echo
			"<tr>".
			"<td><img src='".$komorka['ikona']."' height='30px'></td>".
			"<td>".$komorka['nazwa']."</td>".
			"<td><a href='../klasy/pobieranie.php?file=$nazwa'><img src='../obrazki/pobierz1.png'></a></td>".
			"<td><form method='POST' action='moje.php'><div class='kosz'><input type='submit' value='usuń' name='".$kosz."'></div></form></td>".
			"</tr>";
	
			if(isset($_POST[$kosz]))
			{
				$usun = "DELETE FROM plik WHERE ID_pliku = '$kosz'";
				mysqli_query($this->polaczenie, $usun);
				unlink("../pliki/".$komorka['nazwa']);
				header("Location: moje.php");
			}
		}

	}
	
}


$zmienna = new Moje();
$zmienna->moje_pliki();

?>