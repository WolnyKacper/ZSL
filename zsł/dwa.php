<?php

echo <<< FORM
  <form method="post">
    <input type="text" name="color" placeholder="Wpisz kolor">
    <input type="int" name="wiek" placeholder="Wpisz swój wiek"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
    </form>
FORM;

if (isset($_POST['color'])) {
  $color = $_POST['color'];
  echo "Dane przed poprawą: ",$color,'<br>';

echo ucfirst(strtolower(trim($color))),'<br>';



}
else {
  echo 'Błędne dane';
}











 ?>
