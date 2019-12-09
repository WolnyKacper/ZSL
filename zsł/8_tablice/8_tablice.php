<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form method="post">
    <input type="text" name="name" placeholder="">
  </form>
</body>
</html>
<?php
//tablice indeksowane numerycznie

$colors = $arrayName = array("Red","Green","Blue");
$colors[3]="Magenta";


function ShowArray($colors)
{
  for($i=0; $i<count($colors); $i++)
  {
    $num=$i+1;
    echo "Kolor $num: $colors[$i]<br>";
  }
}

ShowArray($colors);
echo "<hr>";

###############################################################################
//tablice asocjacyjne

$data = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "country" => "Polska",
);

//echo $data["age"],'<br>';

function ShowArrayAssoc($data)
{
  foreach ($data as $key => $value)
  {
    echo "$key: $value<br>";
  }
}

echo ShowArrayAssoc($data),"<hr>";

###############################################################################
//tablice wielowymiarowe

$student = array(
  array("Anna","Nowak","Polska"),
  array("Tomasz"),
  array("Krystyna","Pawlak"),
  array("Anna","Pawlak")
);

//echo $student[2][0];

echo "FOR <br><br>";

function ShowArray2($student)
{
  for ($i=0; $i < count($student); $i++)
  {
    for ($j=0; $j < count($student[$i]); $j++)
    {
      echo $student[$i][$j]," ";
    }
  echo "<br>";
  }
}

echo ShowArray2($student),"<hr>";

echo "FOREACH<br><br>";

function ShowArray3($student)
{
  foreach ($student as $key => $value)
  {
      foreach ($student[$key] as $key => $value)
      {
          echo "$value ";
      }
/*foreach ($student as $value)
{
    foreach ($value as $x)
    {
        echo "$x ";
    }*/
    echo "<br>";
  }
}

echo ShowArray3($student),"<hr>";

/*
    zad. dom.
    utwórz tablice 3-wymiarową i 5-wymiarową
    napisz do tych tablic funkcje wyswietlajace dane
*/

$student1 = array(
  array("Anna", "Nowak" array("Polska")),
  array("Tomasz", "Scholz" array("Niemcy");
);

function ShowStudent1($student1)
{
  foreach ($student1 as $value)
  {
    foreach ($value as $value1)
    {
      foreach ($value1 as $x)
      {
        echo "$x";
      }
    }
  }
}

echo ShowStudent1($student1),"<hr>";

###############################################################################
//sortowanie

$tab = array(10, 1, 15, 20, 100, 8);

function ShowArraySort($tab)
{
  foreach ($tab as $value)
  {
    foreach ($value as $value1)
{
echo "$value ";
}
  }
}

echo ShowArraySort($tab),"<hr>";

//niemalejąco
sort($tab);
echo ShowArraySort($tab),"<hr>";

//nierosnąco
rsort($tab);
echo ShowArraySort($tab),"<hr>";


//sortowanie tablicy asocjacyjnej
$tabAssoc = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "country" => "Polska",
);

echo ShowArrayAssoc($tabAssoc),"<hr>";

//sortowanie wg wartości niemalejąco
asort($tabAssoc);
echo ShowArrayAssoc($tabAssoc),"<hr>";

//sortowanie wg wartości nierosnąco
arsort($tabAssoc);
echo ShowArrayAssoc($tabAssoc),"<hr>";

//sortowanie wg klucza niemalejąco
ksort($tabAssoc);
echo ShowArrayAssoc($tabAssoc),"<hr>";

//sortowanie wg klucza nierosnąco
krsort($tabAssoc);
echo ShowArrayAssoc($tabAssoc),"<hr>";

###############################################################################
//wyswietlanie danych

var_dump($tabAssoc);
echo "<hr>";

print_r($tabAssoc);

echo "<pre>";
  print_r($tabAssoc);
echo "</pre>";

 ?>
