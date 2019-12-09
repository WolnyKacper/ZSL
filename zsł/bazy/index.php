<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
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
      echo "</ul>";

      mysqli_close($connect);
     ?>
     <form method="post">
       <select name="towar">
         <option value="gumka do mazania">gumka do mazania</option>
         <option value="cienkopis">cienkopis</option>
         <option value="pisaki 60 szt">pisaki 60 szt</option>
         <option value="markery 4 szt">markery 4 szt</option>
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

       echo round($promocja,2);
     }

     mysqli_close($connect);
     ?>
  </body>
</html>
