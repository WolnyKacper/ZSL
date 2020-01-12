<?php
session_start();
echo $_SESSION['komunikat'],"<br><br>";
echo "Imię i nazwisko: ",$_SESSION['imie']," ",$_SESSION['nazwisko'],"<br>";
echo "Wiek: ",$_COOKIE['wiek'],"<br>";
echo "Narodowość: ",$_COOKIE['narodowosc'],"<br><br>";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="./cookie2.php">Powrót</a>
  </body>
</html>
