<?php
session_start();

if (!empty($_POST['color'])) {
  $color = $_POST['color'];

  require_once('../connect.php');

  $sql = "INSERT INTO `kolor`(`kolor`) VALUES ('$color')";

  if (mysqli_query($connect,$sql)) {
    header('location:../');
  }
  else {
    echo "error";
  }
}else{
  header('location:../');
}
 ?>
