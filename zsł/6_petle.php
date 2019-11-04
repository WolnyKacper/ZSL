<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Petle</title>
    <link rel="stylesheet" href="css/6_petle.css">
  </head>
  <body>
    <table>
    <?php
    $wiersz = 1;

    do{
      $kolumna = 1;
      echo "<tr>";
      do {
        $value=$kolumna*$wiersz;
        echo "<td>$value</td>";
        $kolumna++;
      } while ($kolumna <= 10);
      echo "</tr>";
      $wiersz++;
    } while ($wiersz <= 10);
     ?>
     </table>
  </body>
</html>
