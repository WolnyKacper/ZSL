<?php
$login = $_POST['login'];
$password = $_POST['password'];

if(!empty($login) && !empty($password)){
  if($login == "jan" && $password == "tajne@"){
    header("location: admin.php");
  }else{
    if($login == "Janusz" && $password == "tajne"){
      header("location: user.php");
    }
  }
}else
    header("location: index.php");
 ?>
