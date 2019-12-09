<?php
setcookie("age",20);
setcookie("age",30);

echo $_COOKIE['age'];

setcookie("city","Poznan", time()+20);
//setcookie("city","Poznan", time()+20);

//setcookie("age","",time() -1);
 ?>
