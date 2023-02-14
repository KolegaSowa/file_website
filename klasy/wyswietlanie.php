<?php


class Wyswietlanie extends Polaczenie
{
	public $szukanie = null;

	public function wyswietlanie()
	{
		$fraza = $_POST['pas'];
		if(isset($_POST['lupa'])&&($fraza!=null))
		{
			//szukany plik
			$fraza = $_POST['pas'];

			//wyłączenie podstawowego wyświetlania
			$szukanie = true;
			//zapytanie do bazy według wyszukiwania
			$zapytanie = "SELECT plik.ID_pliku, plik.ikona, plik.nazwa, uzytkownik.imie, uzytkownik.nazwisko FROM plik INNER JOIN uzytkownik ON plik.wlasciciel=uzytkownik.ID_osoby WHERE nazwa LIKE '%$fraza%'";
		}



		if($szukanie==null)
		{
			//wydanie zapytania do bazy
			$zapytanie = "SELECT plik.ID_pliku, plik.ikona, plik.nazwa, uzytkownik.imie, uzytkownik.nazwisko FROM plik INNER JOIN uzytkownik ON plik.wlasciciel=uzytkownik.ID_osoby";
		}
		//wyśietlanie bazy
	$wyswietlanie = mysqli_query($this->polaczenie, $zapytanie);
	while($komorka = mysqli_fetch_array($wyswietlanie))
	{
		$nazwa = $komorka['nazwa'];
		echo
		"<tr>".
		"<td><img src='".$komorka['ikona']."' height='30px'></td>".
		"<td>".$komorka['nazwa']."</td>".
		"<td>".$komorka['imie']." ".$komorka['nazwisko']."</td>".
		"<td><a href='../klasy/pobieranie.php?file=$nazwa'><img src='../obrazki/pobierz1.png'></a></td>".
		"</tr>";
	}
	}
}

$wyswietlanie = new Wyswietlanie();
$wyswietlanie->wyswietlanie();

?>