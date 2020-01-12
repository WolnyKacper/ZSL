<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep</title>
    <link rel="stylesheet" href="../css/11_bazy.css">
  </head>
  <body>
    <?php
      //skrypt 1
      $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
      $connect = mysqli_connect("localhost","root","","sklep");

      $result = mysqli_query($connect, $sql);

      echo "<ul>";
      while($row=mysqli_fetch_assoc($result))
      {
        echo "<li>",$row["nazwa"],"</li>";
      }
      echo "</ul><hr>";

############################################################################
?>
     <form method="post">
       <select name="towar">
         <?php
         $sql = "SELECT nazwa FROM `towary`";
         $result = mysqli_query($connect,$sql);

         while($row = mysqli_fetch_assoc($result))
         {
           echo "<option value=\"$row[nazwa]\">$row[nazwa]</option>";
         }

mysqli_close($connect);
          ?>
       </select>
       <input type="submit" name="button" value="Zatwierdź">
     </form>
     <?php
     //skrypt 2
     if(isset($_POST['towar']))
     {
       $towar = $_POST['towar'];
       //echo $towar;

       $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\"$towar\"";
       $connect = mysqli_connect("localhost","root","","sklep");
       $result = mysqli_query($connect,$sql);
       $row = mysqli_fetch_assoc($result);
       $promocja = $row['cena'] * 0.85;

       echo "<br>Towar: ",$towar,"<br>Cena: ",round($promocja,2)," zł<hr>";
$promocja = round($promocja,3);
     }
############################################################################
     $sql = "SELECT * FROM `towary` WHERE nazwa=\"$towar\"";
     $result = mysqli_query($connect,$sql);
     $row = mysqli_fetch_assoc($result);
?>

<table>
  <tr id="tytul">
    <th>Nazwa</th>
    <th>Cena</th>
    <th>Cena promocyjna</th>
    <th>Dostawca</th>
  </tr>
  <tr>
    <?php

    echo <<<ROW
    <td>$row[nazwa]</td>
    <td>$row[cena]</td>
    <td>$promocja</td>
    <td>$row[idDostawcy]</td>
ROW;
     ?>
  </tr>
</table>
<br><br>
<?php
$sql = "SELECT * FROM `dostawcy`";
$result = mysqli_query($connect,$sql);
 ?>
<table>
  <tr id="tytul">
    <th>Nazwa dostawcy</th>
    <th>Adres</th>
  </tr>
    <?php
for ($i=0; $i < 2; $i++) {
  $row = mysqli_fetch_assoc($result);
    echo <<<ROW
    <tr>
    <td>$row[nazwa]</td>
    <td>$row[adres]</td>
    </tr>
ROW;
}
     ?>
</table>
<?php
     mysqli_close($connect);
     ?>
  </body>
</html>
