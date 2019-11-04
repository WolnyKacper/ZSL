<?php
  function value($value)
  {
    if ($value>0)
    {
    return 'dodatnia';
    }
    else if($value==0)
    {
      return 'zero';
    }
    else if($value<0)
    {
      return 'ujemna';
    }
  }

  echo value(-1),'<br>'; //ujemna
  echo gettype(value(-1)),'<br>'; //string

  function getValue():int
  {
    return 10.99;
  }

  echo getValue(),'<br><hr>'; //10

###########################################################################
//zasięg zmiennych

$x=10;
function show()
{
  echo "Wartość zmiennej \$x wynosi: $GLOBALS[x]","<br>";
  //echo $GLOBALS['x'];
}

show();

###########################################################################

$y=20;
function show1()
{
  global $y;
  echo "Wartość zmiennej \$y wynosi: $y","<br><hr>";
  //echo $GLOBALS['x'];
}

show1();

###########################################################################

function sum()
{
  $number=10;
  echo "\$liczba wynosi: $number<br>";
  $number+=10;
  }
  sum(); //10
  sum(); //10
  echo "<hr>";

function sum1()
  {
    static $number=10;
    echo "\$liczba wynosi: $number<br>";
    $number+=10;
    }
    sum1(); //10
    sum1(); //20
    sum1(); //30
echo "<hr>";

###########################################################################
//argumenty

function add($x,$y=1)
{
  return $x+$y;
}
$z=3;
echo add(5),'<br>'; //6
echo add(5,10),'<br>'; //15
echo add($z),'<br>'; //4

###########################################################################
//argumenty i typy danych

function multi(float $x,int $y)
{
  return $x * $y;
}
echo multi(3,4),'<br>'; //12
echo multi(2.5,4),'<br>'; //10
echo multi(4,2.5),'<br>'; //8

 ?>
