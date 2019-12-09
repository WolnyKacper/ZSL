<?php

echo <<< FORM
  <form method="post">
    <input type="text" name="imie" placeholder="Wpisz imię"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
  </form>
FORM;

if (isset($_POST['imie'])) {
  $imie = $_POST['imie'];
  echo "Dane przed poprawą: ",$imie,'<br>';

//Zamiana na małe litery
echo strtolower($imie),'<br>';

//Zamiana na duże litery
echo strtoupper($imie),'<br>';

//Zamiana ierwszej litery na dużą
echo ucfirst($imie),'<br>';

//zamiana wszystkiech na male a pierwsza na dużą
echo ucfirst(strtolower($imie)),'<br>','<hr>';


###################################################################

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem, '<br>';
$col = wordwrap($lorem,40,'<br>');
echo $col,'<br>';

//czyszczenie zawartosci bufora
ob_clean();

###################################################################

//usuwanie białych znaków

$name = 'Tomasz';
$name1 = '  Tomasz  ';

echo "Długość zmiennej $name: ",strlen($name),'<br>';
echo "Długość zmiennej $name1: ",strlen($name1),'<br>';

echo "Długość zmiennej $name1 bez spacji: ", strlen(trim($name1)),'<br>';

ob_clean();

//przeszukiwanie ciągów znaków

$address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
$search = strstr($address, 'tel');
echo $search,'<br>';
$address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
$search = strstr($address, 'tel', true);
echo $search,'<br>';

echo strstr('zsl@gmail.com', '@'),'<br>';
echo strstr('zsl@gmail.com', 64/* @ w ASCII to 64 */),'<br>';

//pozycja

$pos = strpos('abcdefg', 'cde');
echo $pos,'<br>';
$pos = strpos('abcabc', 'ab');
echo $pos,'<br>';

ob_clean();

/*
  Sprawdź czy ciąg o nazwie text2 znajduje się w ciagu text1
*/

$text1 = "abcdabcd";
$text2 = "ab";

if (strpos($text1, $text2) === false) {
  echo "Ciąg $text2 nie został znaleziony w ciągu $text1",'<br>';
}
else {
    echo "Ciąg $text2 został znaleziony w ciągu $text1",'<br>';
}

//przetwarzanie ciągu znaków

$replace = str_replace('zsl', 'szkoła', 'zsł ul. Przełajowa 4');
echo $replace,'<br>','<hr>';

//substr

echo substr('Janusz Kowalski', 3),'<br>'; //usz Kowalski
echo substr('Janusz Kowalski', -3),'<br>'; //ski
echo substr('Janusz Kowalski', 7, 5),'<br>'; //Kowal
echo substr('Janusz Kowalski', 7, -3),'<br>','<hr>'; //Kowal

##############################################################

//zamiana polskich znaków

$login = 'żąkil';
$censore = array('ą','ć', 'ę', 'ł', 'ń', 'ś', 'ó', 'ź', 'ż');
$replace = array('a','c', 'e', 'l', 'n', 's', 'o', 'z', 'z');

$NewLogin = str_ireplace($censore, $replace, $login);
echo $NewLogin,'<hr>';

}

$text = <<< TEXT
  zsk - Zespół
  Szkół
  Łączności
TEXT;

echo "Przed wywołaniem funcji nl2br:<br>$text";
echo "<br>Po wywołaniu funcji nl2br:<br>";
echo nl2br($text);


?>
