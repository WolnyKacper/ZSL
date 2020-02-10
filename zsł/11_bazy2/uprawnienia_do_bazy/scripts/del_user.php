<?php
session_start();

require_once("../connect.php");

$id = $_GET["id"];
//echo $id;

$sql = "DELETE FROM `user` WHERE `user`.`id` = $id";

if (mysqli_query($connect,$sql)){
  $_SESSION['message']="<br>usunięto prawidłowo użytkownika<br><br>";
}
header('location: ../');

 ?>
