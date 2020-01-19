<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="sprawdz.php" method="post">
      <input type="text" name="login" placeholder="Login:"><br><br>
      <input type="password" name="password" placeholder="Hasło:"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
    <?php
    $city = $_POST['city'];
    $color = $_POST['color'];
    $name = $_POST['name'];

    $dane = array(
      'Kolor' => $color,
      'Miasto' => $city);

    session_start();
    $_SESSION['color']=$color;
    $_SESSION['city']=$city;
    $_SESSION['name']=$name;

    foreach ($dane as $key => $value){
     echo <<< TABLE
     <table>
       <tr>
         <th>$key</th>
         <td>$value</td>
       </tr>
     </table>
TABLE;
    }

    setcookie("name1","Kacper",time()+60*60*24*2);
    ?>
  </body>
</html>
