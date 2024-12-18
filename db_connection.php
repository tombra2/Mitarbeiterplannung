<?php

// Super User Login Daten

$servername = "localhost";
$dbname = "super_user_log";
$db_username = "root";
$db_password = "tb?ftM16#Dt6";

//Verbindung mit db-Herstellen

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Verbindung überprüfen

if ($conn->connect_error) {
    die("Verbindung konnte nicht hergestellt werden".$conn->connect_error);
}

if ($conn) {
    echo "Verbindung zur Datenbank hergestellt";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
}
