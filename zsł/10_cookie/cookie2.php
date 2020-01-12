<!--
Uzytkownik podaje w formularzu: imie, nazwisko, wiek, narodowosc
Sprawdz czy przeslal wszystkie dane, jesli tak to wyswietl mu na stronie cookieSuccess.php komunikat: przeslany zmienna sesyjną o tresci:
"prawidlowo przeslany formularz"
imie i nazwisko przypisz do zmiennych sesyjnych
wiek i narodowosc przypisz do zmiennej cookie
wyswietl dane na stronie cookieSuccess.php w formacie:
Imie i nazwisko: ...
Wiek: ...
Narodowosc: ...
Zabezpiecz formularz przed podaniem danych, ktore beda mialy wiecej niz 10 znakow, w przypadku bledow wyswietl za pomocą zmiennej sesyjnej komunikat pod formularzem.
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Imię:"><br><br>
      <input type="text" name="surname" placeholder="Nazwisko:"><br><br>
      <input type="number" name="age" placeholder="Wiek:"><br><br>
      <input type="text" name="nation" placeholder="Narodowość:"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
    <?php
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && !empty($_POST['nation'])) {
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $age = $_POST['age'];
      $nation = $_POST['nation'];

      session_start();
      $_SESSION["komunikat"] = "prawidlowo przesłany formularz";
      $_SESSION['imie'] = $name;
      $_SESSION['nazwisko'] = $surname;
      setcookie("wiek",$age);
      setcookie("narodowosc",$nation);
    }
     ?>
     <a href="./cookieSuccess.php">cookieSuccess</a>
  </body>
</html>
