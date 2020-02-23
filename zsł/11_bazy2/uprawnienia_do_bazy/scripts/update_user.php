<?php
session_start();

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $id = $_POST['id'];

  require_once('../connect.php');
  $sql = "UPDATE `user` SET `imie`='$name', `nazwisko`='$surname', `data_urodzenia`='$birthday' WHERE id='$id'";

  mysqli_query($connect,$sql);
}

header('location:../');

 ?>
