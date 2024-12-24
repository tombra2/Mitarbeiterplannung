<?php

//Login data for database (super users)

$hostname = "92.113.22.4";
$username = "u414826164_root";
$password = "txj_gmr2zrp8HUK-ufq";
$database = "login";
$database_2 = "mitarbeiter";

//Connection to database

$conn_login = new mysqli($hostname, $username, $password, $database);
db_error($conn_login);


$conn_mitarbeiter = new mysqli($hostname, $username, $password, $database_2);
db_error($conn_mitarbeiter);



// Verbindung überprüfen
function db_error($temp_conn)
{
    if ($temp_conn->connect_error) {
        die("Verbindung konnte nicht hergestellt werden".$temp_conn->connect_error);
    }

    if ($temp_conn) {
        echo "Verbindung zur Datenbank hergestellt";
    }
}
