  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <!-- Navbar Brand -->
        <a class="navbar-brand" href="#">Mitarbeiterplanung</a>
        
        <!-- Navbar Toggle für kleine Bildschirme -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Menü umschalten">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ms-auto">
            <!-- Dropdown für Mitarbeiterverwaltung -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="mitarbeiterverwaltungDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mitarbeiterverwaltung
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="mitarbeiterverwaltungDropdown">
                <li><a class="dropdown-item" href="/new_employee.php">Mitarbeiter hinzufügen</a></li>
                <li><a class="dropdown-item" href="/edit_emplyee.php">Mitarbeiter bearbeiten</a></li>
                <li><a class="dropdown-item" href="/delete_emplyee.php">Mitarbeiter löschen</a></li>
              </ul>
            </li>
        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dienstplanverwaltungDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dienstplanverwaltung
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="mitarbeiterverwaltungDropdown">
                <li><a class="dropdown-item" href="/new_employee.php">Heutiger Dienstplan   </a></li>
                <li><a class="dropdown-item" href="/edit_emplyee.php">Neuen Dienstplan generieren</a></li>
                <li><a class="dropdown-item" href="/delete_emplyee.php">Aktueller Mannschaftsstand</a></li>
              </ul>
            </li>
            <!-- Weitere Navbar Links -->
            <!-- Weitere Navbar Links -->
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

