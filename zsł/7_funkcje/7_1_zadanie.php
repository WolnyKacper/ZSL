<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="x" placeholder="Podaj wartość1:">
      <input type="number" name="y" placeholder="Podaj wartość2:"><br><br>
      <input type="radio" name="działanie" value="suma">suma<br>
      <input type="radio" name="działanie" value="przedział">przedział<br><br>
      <input type="submit" name="button" value="Zatwierdź"><br>
    </form>

    <?php
    if (!empty($_POST['x']) && !empty($_POST['y']) && !empty($_POST['działanie'])) {
      $x = $_POST['x'];
      $y = $_POST['y'];
      $działanie = $_POST['działanie'];


    switch ($działanie) {
      case 'suma':
        $działanie = 'Suma';
        $value=1;
        break;
      case 'przedział':
        $działanie = "Przedział";
        $value=2;
        break;
    }
    echo "<br>$działanie:<br>";

    function suma($x,$y)
    {
      return $x+$y;
    }

    function przedział($x,$y)
    {
      while ($x <= $y)
      {
        echo $x,'<br>';
        $x++;
      }
    }

    if($value==1)
    {
    echo suma($x,$y);
    }
    else
    {
      echo przedział($x,$y);
    }
  }

     ?>

  </body>
</html>
