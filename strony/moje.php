<?php
//wyłączenie wyśietlania błędów
error_reporting(0);
//otworzenie sesji
session_start();
//sprawdzanie statusu zalogowania
require_once("../klasy/sprawdzanie.php");
//połączenie z bazą
require_once("../klasy/polaczenie.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/moje_styl.css">
	<link rel="stylesheet" href="../style/kosz.css">
	<title>Archiwum</title>
</head>
<body>
	<div id="panel">
		<div id="a">
			<form method="POST" action="index.php">
				<input type="submit" name="wroc" value="WRÓĆ">
			</form>
		</div>
	</div>
	<main>
		<div id="pasek">
			<form method="POST" action="">
				<input type="submit" name="lupa" value="SZUKAJ"><input name="pas" placeholder="Wpisz frazę...">
			</form>
			<br>
		</div>
		<table border="1" style="width:100%;table-layout:fixed;">
			<tr>
				<td></td>
				<td>NAZWA</td>
				<td >POBIERZ</td>
				<td>USUŃ</td>
			</tr>
		<?php
			include_once("../klasy/moje_pliki.php");
		?>

		</table>
	</main>
</body>
</html>