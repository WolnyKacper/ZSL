<?php
session_start();
$_SESSION["name"] = "Janusz";
 ?>
 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sesja 1</title>
   </head>
   <body>
     Strona startowa<hr>
     Witaj
     <?php
     echo $_SESSION['name'];
      ?>
      na stronie!<br>
      <?php
      echo " Identyfikator sesji: ", session_id();
       ?>
       <hr><a href="./sesja2.php">Druga strona</a>
   </body>
 </html>
