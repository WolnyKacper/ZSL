<?php
session_start();
unset($_SESSION['name']);
session_destroy();
 ?>
 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sesja 3</title>
   </head>
   <body>
    Trzecia strona<hr>
     Witaj
     <?php
     echo $_SESSION['name'];
      ?>
      na stronie!<br>
      <?php
      echo " Identyfikator sesji: ", session_id();
       ?>
       <hr><a href="./sesja1.php">Strona startowa</a>
   </body>
 </html>
