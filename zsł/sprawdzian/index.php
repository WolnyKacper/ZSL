<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kacper Wolny</title>
  </head>
  <body>
    <form action="dane.php" method="post">
      <select name="city">
        <option>Poznań</option>
        <option>Gdańsk</option>
        <option>Kraków</option>
        <option>Warszawa</option>
        <option>Wrocław</option>
      </select>
      <input type="text" name="name" placeholder="Podaj imię:">
      <input type="radio" name="color" value="red">Red
      <input type="radio" name="color" value="green">Green
      <input type="radio" name="color" value="blue">Blue
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
  </body>
</html>
