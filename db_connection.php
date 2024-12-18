<?php

// Super User Login Daten

$servername = "localhost";
$dbname = "super_user_login";
$db_username = "root";
$db_password = "";

//Verbindung mit db-Herstellen

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Verbindung überprüfen

if ($conn->connect_error) {
    die("Verbindung konnte nicht hergestellt werden".$conn->connect_error);
}

if ($conn) {
    echo "Verbindung zur Datenbank hergestellt";
}
