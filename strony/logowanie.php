<?php
//rozpoczęcie sesji
session_start();
//wyłączenie wyśietlania błędów
//error_reporting(0);
//dodanie podłączenia do bazy danych
require_once("../klasy/polaczenie.php");
//dodanie funkcji logowania
include_once("../klasy/logowanie.php");
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/log_styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zaloguj się</title>
</head>

<body>
  <main>
  
  <header>Zaloguj się</header>
      
      <form action="logowanie.php" method="POST">

        <div>
          <input type="text" placeholder="Login" spellcheck="false" name="login">
        </div>

        <div>
          <input type="password" placeholder="Hasło" name="haslo">
        </div>

        <input type="submit" value="Zaloguj się" name="log">
        
    </form>
  </main>
</body>
</html>