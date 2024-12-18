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
  <main class="container mt-4">
    <div class="form-section">
      <h2>Mitarbeiter hinzufügen</h2>
      <h5>Persönliche Informationen</h5>
      <form id="mitarbeiterForm" novalidate>
        <div class="mb-3">
          <label for="mitarbeiterId" class="form-label">Mitarbeiter ID</label>
          <input type="text" class="form-control" id="mitarbeiterId" name="mitarbeiterId" required>
          <div class="invalid-feedback">
            Bitte geben Sie die Mitarbeiter ID ein.
          </div>
          <div class="mb-3">
            <label for="vorname" class="form-label">Vorname</label>
            <input type="text" class="form-control" id="vorname" name="vorname" required>
            <div class="invalid-feedback">
              Bitte geben Sie den Vornamen ein.
            </div>
          </div>
          <div class="mb-3">
            <label for="nachname" class="form-label">Nachname</label>
            <input type="text" class="form-control" id="nachname" name="nachname" required>
            <div class="invalid-feedback">
              Bitte geben Sie den Nachnamen ein.
            </div>
          </div>
          <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
            <div class="invalid-feedback">
              Bitte geben Sie die Adresse ein.
            </div>
          </div>
          <div class="mb-3">
            <label for="telefonnummer" class="form-label">Telefonnummer</label>
            <input type="tel" class="form-control" id="telefonnummer" name="telefonnummer"
              pattern="^\+?[0-9\s\-]{7,15}$" required>
            <div class="invalid-feedback">
              Bitte geben Sie eine gültige Telefonnummer ein.
            </div>
          </div>
        </div>
        <h4>Notfallkontakt</h4>
        <div class="mb-3">
          <label for="notfallName" class="form-label">Name</label>
          <input type="text" class="form-control" id="notfallName" name="notfallName" required>
          <div class="invalid-feedback">
            Bitte geben Sie den Namen des Notfallkontakts ein.
          </div>
        </div>
        <div class="mb-3">
          <label for="notfallTelefon" class="form-label">Telefonnummer</label>
          <input type="tel" class="form-control" id="notfallTelefon" name="notfallTelefon"
            pattern="^\+?[0-9\s\-]{7,15}$" required>
          <div class="invalid-feedback">
            Bitte geben Sie eine gültige Telefonnummer ein.
          </div>
          <br>
          <h5>Qualifikationsmatrix</h5>
          <div class="form-check">
            <label for="isMeister">Meister</label>
            <input class="form-check-input" type="checkbox" value="" id="isMeister">
          </div>
          <div class="form-check">
            <label for="isMeister">Meister</label>
            <input class="form-check-input" type="checkbox" value="" id="isMeister">
          </div>
          <div class="form-check">
            <label for="isMeister">Meister</label>
            <input class="form-check-input" type="checkbox" value="" id="isMeister">
          </div>
          <div class="form-check">
            <label for="isMeister">Meister</label>
            <input class="form-check-input" type="checkbox" value="" id="isMeister">
          </div>
          <div class="form-check">
            <label for="isMeister">Meister</label>
            <input class="form-check-input" type="checkbox" value="" id="isMeister">
          </div>

          <button type="submit" class="btn btn-primary">Mitarbeiter hinzufügen</button>
      </form>
    </div>
  </main>
  </main>

  <!-- Bootstrap JS ohne Integrity und Crossorigin -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>