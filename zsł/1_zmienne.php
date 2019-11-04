<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $name = 'janusz';
    echo "Twoje imie: $name";
    echo "Twoje imie:",$name;
    echo "Twoje imie:".$name;
    echo "Twoje imie: $name";

    $x = 10;
    $hex = 0xA;
    $oct = 021;
    $bin = 0b1011;
    echo $bin;
    echo $oct;
    echo $hex,'<hr>';

    $name = 'Anna';
    $surname = 'Kowal';

    echo <<< ETYKIETA

    imię: $name<br>
    Nazwisko: $surname<hr>
ETYKIETA;

$x =<<< ETYKIETA
Heredoc<br>
imię: $name<br>
Nazwisko: $surname<hr>
ETYKIETA;

echo $x;



echo <<< 'E'
Nowdoc<br>
imię: $name<br>
Nazwisko: $surname<hr>
E;

$x = 20;
echo "Nazwa zmiennej:\$x ma wartosc: $x"

/*
Najszybszy sposób wyświetlania stringów:
heredoc,konkatenacja
*/

     ?>

  </body>
</html>
