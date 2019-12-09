<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabliczka mnozenia</title>
    <link rel="stylesheet" href="css/6_petle.css">
  </head>
  <body>
    <form method="post">
      <input type="number" name="max" placeholder="Do ilu tabelka?">
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    $max = $_POST['max'];
    echo '<br><hr><br>';
     ?>
    <table>
    <?php
    $wiersz = 1;
    $suma=0;
    $suma1=0;
    $suma2=0;
    do{
      $kolumna = 1;
      echo "<tr>";
      do {
        $value=$kolumna*$wiersz;
        if ($kolumna+$wiersz==$max+1){
            echo "<td class='przekatna2'>$value</td>";
            $suma2=$suma2+$value;
        }
        else
        {
          if ($kolumna==$wiersz) {
            echo "<td class='przekatna1'>$value</td>";
            $suma1=$suma1+$value;
            $suma=$suma1+$suma2;
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
