<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep</title>
    <style>
    body{
      background-color: lime;
    }
    </style>
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

     ?>
     <form method="post">
       <select name="towar">
         <?php
         $sql = "SELECT `nazwa` FROM `towary`";
         $result = mysqli_query($connect,$sql);

         while($row = mysqli_fetch_assoc($result))
         {
           echo "<option>",$row['nazwa'],"</option>";
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

       echo "Towar: ",$towar,"<br>Cena: ",round($promocja,2)," zł";
     }
     mysqli_close($connect);

     ?>
  </body>
</html>
