<?php
session_start();

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['color'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $color = $_POST['color'];

  require_once('../connect.php');
  $sql = "INSERT INTO `user`(`imie`, `nazwisko`, `data_urodzenia`, `kolor`) VALUES ('$name','$surname','$birthday','$color')";

  if (mysqli_query($connect,$sql)) {
    $_SESSION['oldNum'] = $_SESSION['num'];
    header('location:../');
  }
  else {
    echo "error";
  }
}else{
  header('location:../');
}
 ?>
