<?php
//wyłączenie wyśietlania błędów
error_reporting(0);
//rozpoczęcie sesji
session_start();
//sprwdzanie statusu zalogowania
require_once("../klasy/sprawdzanie.php");
//połączenie z bazą
require_once("../klasy/polaczenie.php");
//dodanie wylogowania i zamknięcia bazy
require_once("../klasy/wylogowanie.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/ind_styl.css">
	<title>Archiwum</title>
</head>
<body>
	<div id="panel">
		<div id="wylog">
			<form method="POST" action="index.php">
				<input type="submit" name="wyloguj" value="Wyloguj się">
			</form>
		</div>
		<div id="dod">
			<form action="dodawanie.php">
				<input type="submit" name="doda" value="Dodaj pliki">
			</form>
		</div>
		<div id="moje">
			<form method="POST" action="moje.php">
				<input type="submit" name="moj" value="Moje pliki">
			</form>
		</div>
	<main>
		<div id="pasek">
			<form method="POST" action="index.php">
				<input type="submit" name="lupa" value="SZUKAJ"><input name="pas" placeholder="Wpisz frazę...">
			</form>
			<br>
		</div>

		<table border="1" style="width:70vw; table-layout:fixed; text-align:center;">
			<tr>
				<td></td>
				<td>NAZWA</td>
				<td>WŁAŚCICEL</td>
				<td>POBIERZ</td>
			</tr>

			<?php 
			//dodanie wyświetlania bazy
			include_once("../klasy/wyswietlanie.php");

			?>
		</table>
	</main>
</body>
</html>

