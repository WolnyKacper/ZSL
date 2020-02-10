<?php
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
}else{
  header('location:../');
}
 ?>
