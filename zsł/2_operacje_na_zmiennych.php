<?php

$potega = 2 ** 10;
echo $potega,'<br>';

$a = 1;
$b = 1.0;

if ($a == $b)
{

  echo "$a jest rowna $b<br>";
}
else {
  echo "$a nie jest rowna $b<br>";
}

if ($a === $b)
{

  echo "$a jest identyczna $b<br>";
}
else {
  echo "$a nie jest identyczna $b<br>";
}

echo gettype($a);
echo gettype($b);

$x = 1;
$y = 1;
$result = $x <=> $y;
echo $result;

#############################################################

$x = 2;
echo $x++;//2
echo ++$x;//4
echo $x;//4
$y = $x++;//4
echo $y;//4
$y = ++$x;//
echo $y;//6
echo ++$y,'<hr>';//7

//operatory rzutowania
//bool, int, float, string, array, object, date_sunset
$text1 = '123abc';
$text1 = (int)$text1;
echo $text1,'<br>'; //123

$text2 = '2';
$text2 = (bool)$text2;
echo $text2,'<br>'; //1 - prawda, nic nie wyswietli to false
echo gettype($text2); //boolean


$text3 =123;
$text3 = (unset)$text3;
echo $text3,'<br>';
echo gettype($text3); //null

#############################################################

$x = 10;
echo is_string($x); //false
echo is_bool($x); //false
echo is_float($x); //false
echo is_int($x); //true
echo is_null($x),'<hr>'; //false

//operator ignorowania bledow @
$w;
echo @gettype($w); //NULL

#############################################################

//Zmienne superglobalne
// $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER


echo $_SERVER['SERVER_PORT'],'<br>';    //80
echo $_SERVER['SERVER_NAME'],'<br>';    //127.0.0.1
echo $_SERVER['SERVER_PROTOCOL'],'<br>';    //HTTP/1.1
echo $_SERVER['SCRIPT_NAME'],'<br>';    ///zsł/2_operacje_na_zmiennych.php
echo $_SERVER['DOCUMENT_ROOT'],'<br>';    //C:/xampp/htdocs


//$localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'].'<br>';
$localFile  = $_SERVER['DOCUMENT_ROOT'];
$localFile .= $_SERVER['SCRIPT_NAME'].'<br>'; //to samo, ten sposob lepszy gdy jest wiecej linii
echo $localFile;

#############################################################
//Stałe
//nazwy stalych z wielkich liter, nie maja $


define('NAZWISKO', 'Kowalski');
echo NAZWISKO, '<br>';

define('imie', 'Janusz');
echo imie, '<br>';

define('SURNAME', 'Nowak', true); // w 8 wersji PHP brak 3 argumentu
echo SUrnAME,'<br>';

#############################################################
//stałe predefiniowane

echo PHP_VERSION; //7.3.9
echo gettype(PHP_VERSION); //string

if (PHP_VERSION > 5.6)
 {
  echo 'Nowa wersja PHP';
}
  else{
    echo 'Stara wersja PHP';

 }

 echo PHP_OS; //WINNT
echo __LINE__;  //linia 124
















 ?>
