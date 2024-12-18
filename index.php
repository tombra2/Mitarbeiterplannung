<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Benutzername:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Passwort:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Anmelden</button>
        <a href="/register.php">Benutzer anlegen </a>
    </form>


    <?php
    session_start();

    include "db_connection.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $statement = $conn->prepare("SELECT `user`, `password` FROM `user` WHERE `user` = ?");
        $statement->bind_param("s", $username);
        $statement->execute();
        $statement->store_result();

        if ($statement->num_rows > 0) {
            $statement->bind_result($username, $hashed_password);
            $statement->fetch();

            if (password_verify($password, $hashed_password)) {

                $_SESSION["username"] = $username;

                header("Location: overview.php");


            } else {
                echo "Falsches Password";
            }



        } else {
            echo" Benutzer konnte nicht gefunden werden";
        }

        $statement->close();

    }








    ?>







</body>

</html>