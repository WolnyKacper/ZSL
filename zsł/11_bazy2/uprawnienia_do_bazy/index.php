<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna</title>
    <link rel="stylesheet" href="11_bazy2.css">
  </head>
  <body>
    <h3>Tabela user</h3>
    <?php
    if (isset($_SESSION['message'])){
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }

    require_once('./connect.php');

    $sql = "SELECT * FROM user";
    if ($result = mysqli_query($connect,$sql)) {
      //echo "prawidłowe zapytanie";

      echo <<<TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
        </tr>
TABLE;
      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<ROW
        <tr>
          <td>$row[imie]</td>
          <td>$row[nazwisko]</td>
          <td>$row[data_urodzenia]</td>
          <td><a href="./scripts/del_user.php?id=$row[id]">usuń</a></td>
        </tr>
ROW;
      }
    }else {
      echo "błędne zapytanie";
    }
     ?>

   </table>
   <h3>Dodaj nowego użytkownika</h3>

   <form action="./scripts/add_user.php" method="post">
     <input type="text" name="name" placeholder="np. Janusz"><br><br>
     <input type="text" name="surname" placeholder="np. Nowak"><br><br>
     <input type="date" name="birthday"><br><br>
     <input type="submit" name="button" value="Dodaj użytkownika"><br><br>
   </form>
  </body>
</html>
