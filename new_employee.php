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
      <!-- Name -->
      <label for="vorname">Vorname:</label><br>
      <input type="text" id="vorname" name="vorname" required><br><br>

      <label for="nachname">Nachname:</label><br>
      <input type="text" id="nachname" name="nachname" required><br><br>

      <!-- Adresse -->
      <label for="adresse">Adresse:</label><br>
      <input type="text" id="adresse" name="adresse"><br><br>

      <!-- PLZ -->
      <label for="plz">PLZ:</label><br>
      <input type="text" id="plz" name="plz"><br><br>

      <!-- Wohnort -->
      <label for="wohnort">Wohnort:</label><br>
      <input type="text" id="wohnort" name="wohnort"><br><br>

      <!-- Geschlecht -->
      <p>Geschlecht:</p>
      <input type="radio" id="geschlechtM" name="geschlecht" value="M">
      <label for="geschlechtM">M</label>
      <input type="radio" id="geschlechtW" name="geschlecht" value="W">
      <label for="geschlechtW">W</label>
      <input type="radio" id="geschlechtD" name="geschlecht" value="D">
      <label for="geschlechtD">D</label><br><br>

      <!-- Geburtstag -->
      <label for="geburtstag">Geburtstag:</label><br>
      <input type="date" id="geburtstag" name="geburtstag"><br><br>

      <!-- Herkunft -->
      <?php include "/api_request.php";?>
      <p>Welche Skills beherrschst du?</p>
      <input type="checkbox" id="skillExcel" name="skills[]" value="Excel">
      <label for="skillExcel">EXCEL</label><br>

      <input type="checkbox" id="skillGit" name="skills[]" value="Git">
      <label for="skillGit">GIT</label><br>

      <input type="checkbox" id="skillDocker" name="skills[]" value="Docker">
      <label for="skillDocker">DOCKER</label><br>

      <input type="checkbox" id="skillHtml" name="skills[]" value="HTML">
      <label for="skillHtml">HTML</label><br>

      <input type="checkbox" id="skillCss" name="skills[]" value="CSS">
      <label for="skillCss">CSS</label><br>

      <input type="checkbox" id="skillJavascript" name="skills[]" value="Javascript">
      <label for="skillJavascript">Javascript</label><br>

      <input type="checkbox" id="skillJava" name="skills[]" value="Java">
      <label for="skillJava">JAVA</label><br>

      <input type="checkbox" id="skillPHP" name="skills[]" value="PHP">
      <label for="skillPHP">PHP</label><br>

      <input type="checkbox" id="skillMYSQL" name="skills[]" value="MYSQL">
      <label for="skillMYSQL">MYSQL</label><br><br>

      <!-- Englisch-Fähigkeiten -->
      <p>English Skills (A1 - C2):</p>
      <label for="englishSpeak">Speak:</label>
      <select id="englishSpeak" name="englishSpeak">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
      </select><br><br>

      <label for="englishListen">Listen:</label>
      <select id="englishListen" name="englishListen">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
      </select><br><br>

      <label for="englishWrite">Write:</label>
      <select id="englishWrite" name="englishWrite">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
      </select><br><br>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include "db_connection.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = trim($_POST["vorname"]);
      $sure_name = trim($_POST["nachname"]);
      $country = trim($_POST["country"]);
      $birtday = trim($_POST["birthday"]);
      $is_vorschmelzer = isset($_POST["isVorschmeltzer"]) ? true : false ;
      $statemnet = $conn_mitarbeiter->prepare("INSERT INTO mitarbeiter_tabel(birthday,firstname, surename, country, isVorschmelzer)values (?,?,?,?,?)");
      $statemnet->bind_param("sssss", $birtday, $name, $sure_name, $country, $is_vorschmelzer);
      if ($statemnet->execute()) {
          echo "Mitarbeiter wurde angelegt";
      } else {
          echo "Es ist ein Fehler ".$statemnet->error;

      }
      $statemnet->close();
      $conn_mitarbeiter-> close();

  }







  ?>