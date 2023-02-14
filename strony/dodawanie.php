<?php
//wyłączenie wyśietlania błędów
//error_reporting(0);
//rozpoczęcie sesji
session_start();
//sprwdzanie statusu zalogowania
require_once("../klasy/sprawdzanie.php");
//połączenie z bazą
require_once("../klasy/polaczenie.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/dod_styl.css">
	<title>Dodaj</title>
</head>
<body>
	<form method="POST" action="index.php">
		<div id="wroc">
			<input type="submit" name="wroc" value="WRÓĆ">
		</div>
	</form>
	
	<form method="POST" enctype="multipart/form-data" action="dodawanie.php">
		<main>
				<div id="div">
			<label id="kontener">
				<span>Upuść plik</span>lub
				<input type="file" name="plik" id="plik">
			</label>
				</div>
				<input type="submit" name="dod" value="DODAJ">

				<?php
					require_once("../klasy/wysylanie.php");
				?>
		</main>
	</form>

	 <script src="../funkcje/przeciaganie.js"></script> 
	 
</body>
</html>
