<!DOCTYPE html>
<?php
// protected.php
session_start();

// Prüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
    $username = $_SESSION["username"];
}
?>

<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Bootstrap Responsive Navbar mit Dropdown</title>

  <!-- Bootstrap CSS ohne Integrity und Crossorigin -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include "navmenu.php"; ?>

  <main class="container mt-4">
    <h1>Hallo {$username}</h1>
    <h1>Willkommen auf der Mitarbeiterübersicht</h1>
    <p>Hier ist der Hauptinhalt. Passe die Fenstergröße an, um das responsive Verhalten der Navbar zu testen.</p>
  </main>

  <!-- Bootstrap JS ohne Integrity und Crossorigin -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>