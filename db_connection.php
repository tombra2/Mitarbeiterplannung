<?php

//Login data for database (super users)

$hostname = "localhost";
$username = "root";
$password = "";
$database = "super_user_login";
$database_2 = "mitarbeiter";

//Connection to database

$conn = new mysqli($hostname, $username, $password, $database);
db_error($conn);


$conn_2 = new mysqli($hostname, $username, $password, $database_2);
db_error($conn_2);



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
