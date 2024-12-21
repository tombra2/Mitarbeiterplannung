<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Mitarbeiterinformations Programm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include "navmenu.php"; ?>
  <main>
    <h1>Neuen Mitarbeiter anlegen</h1>
    <form action="/new_employee.php" Method="post">
      <label>Vorname:</label>
      <input type="text" id="vorname" name="vorname">
      <br>
      <label> Nachname</label>
      <input type="text" id="nachname" name="nachname"><br>
      <?php include "api_request.php"; ?>
      <br>
      <label for="isVorschmelzer">Vorschmelzer</label>
      <input type="checkbox" name="isVorschmeltzter" id="isVorschmeltzer">
      <br>
      <button type="submit">Mitarbeiter anlegen</button>
    </form>


  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include "db_connection.php";

  $name = $_POST["vorname"];
  $sure_name = $_POST["nachname"];
  $country = $_POST["country"];



  echo $name."<br>";
  echo $sure_name."<br>";
  echo $country."<br>"







  ?>