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

    $sql = "SELECT * FROM user INNER JOIN kolor ON user.kolor=kolor.id";
    if ($result = mysqli_query($connect,$sql)) {
      //echo "prawidłowe zapytanie";
      $_SESSION['num'] = mysqli_num_rows($result);
      echo 'Ilość rekordów w tabeli user: ',$_SESSION['num'],'<br><br>';
      if (isset($_SESSION['oldNum'])) {
        if ($_SESSION['num'] > $_SESSION['oldNum']) {
          echo "Dodano nowy rekord<br><br>";
        }
      }

      echo <<<TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Ulubiony kolor</th>
        </tr>
TABLE;
      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<ROW
        <tr>
          <td>$row[imie]</td>
          <td>$row[nazwisko]</td>
          <td>$row[data_urodzenia]</td>
          <td>$row[kolor]</td>
          <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
          <td><a href="./?update_user=$row[id]">Aktualizuj</a></td>
        </tr>
ROW;
      }
    }else {
      echo "błędne zapytanie";
    }
     ?>
   </table><br>
   <hr><h3>Dodaj nowego użytkownika</h3>

   <form action="./scripts/add_user.php" method="post">
     <input type="text" name="name" placeholder="np. Janusz"><br><br>
     <input type="text" name="surname" placeholder="np. Nowak"><br><br>
     <input type="date" name="birthday"><br><br>
     <select name="color">
       <?php
       require_once('./connect.php');
       $sql = "SELECT * FROM kolor";
       $result = mysqli_query($connect,$sql);
       while ($row = mysqli_fetch_assoc($result)) {
         $color = $row['kolor'];
         $id = $row['id'];
         echo "<option value=\"$id\">$color</option>";
       }
        ?>
     </select><br><br>
     <input type="submit" name="button" value="Dodaj użytkownika"><br><br>
   </form>

   <?php
   if (isset($_GET['update_user'])){
     $id = $_GET['update_user'];
     $sql = "SELECT * FROM user WHERE id='$id'";
     $result = mysqli_query($connect,$sql);
     $user = mysqli_fetch_assoc($result);
     $name = $user['imie'];
     $surname = $user['nazwisko'];
     $birthday = $user['data_urodzenia'];

     echo <<< UPDATE
      <hr><h3>Aktualizacja użytkownika</h3>
      <form action="./scripts/update_user.php" method="post">
        <input type="text" name="name" value=$name><br><br>
        <input type="text" name="surname" value=$surname><br><br>
        <input type="date" name="birthday" value=$birthday><br><br>
        <input type="submit" name="button" value="Aktualizuj użytkownika"><br><br>
        <input type="hidden" name="id" value="$id">
      </form>
UPDATE;
   }
    ?>
   <hr>

   <h3>Tabela kolor</h3>

   <form action="./scripts/add_color.php" method="post">
     <input type="text" name="color" placeholder="Wpisz kolor:"><br><br>
     <input type="submit" name="button" value="Zatwierdź"><br><br>
   </form>

   <?php
   $sql = "SELECT * FROM kolor";
   $result = mysqli_query($connect,$sql);

   echo <<< KOLOR
   <table>
     <tr>
       <th>ID</th>
       <th>Kolor</th>
     </tr>
KOLOR;
   while ($row = mysqli_fetch_assoc($result)) {
     echo <<<ROW
     <tr>
       <td>$row[id]</td>
       <td>$row[kolor]</td>
     </tr>
ROW;
   }

    ?>
  </body>
</html>
