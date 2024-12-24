<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
</head>

<body>
    <form action="/register.php" method="POST">
        <label for="username">Benutzername:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Passwort:</label>
        <input type="password" name="password" id="password" required>

        <label for="password">Passwort wiederholen</label>
        <input type="password" name="password_repeat" id="password_repeat" required>

        <button type="submit">Registrieren</button>
        <a href="/index.php">Zurück zur Anmeldung</a>






    </form>


    <?php
    include "db_connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $password_repeat = trim($_POST["password_repeat"]);

        if ($password == $password_repeat) {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $statement = $conn_login->prepare("INSERT INTO login(username,password)values (?,?)");


            $statement->bind_param("ss", $username, $hashed_password);

            if ($statement->execute()) {
                echo "Benutzer angelegt";
            } else {
                echo "Fehler: ".$statement->error;
            }
            $statement->close();
            $conn_login->close();
            exit;
        } else {
            echo "Passwörter stimmen nicht überein";
        }





    }


    ?>
</body>

</html>