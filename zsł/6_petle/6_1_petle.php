<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabliczka mnozenia</title>
    <link rel="stylesheet" href="css/6_petle.css">
  </head>
  <body>
    <table>
    <?php
    $wiersz = 1;
    $suma=0;
    do{
      $kolumna = 1;
      echo "<tr>";
      do {
        $max=10;
        $value=$kolumna*$wiersz;
        if ($kolumna+$wiersz==$max+1){
            echo "<td class='przekatna2'>$value</td>";
        }
        else
        {
          if ($kolumna==$wiersz) {
            echo "<td class='przekatna1'>$value</td>";
            $suma=$suma+$value;
          }
          else
          {
            echo "<td>$value</td>";
          }
        }
        $kolumna++;
      } while ($kolumna <= $max);
      echo "</tr>";
      $wiersz++;
    } while ($wiersz <= $max);
     ?>
     </table>
     <?php
echo '<br>','Suma wynosi: ',$suma;
      ?>

  </body>
</html>
