<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = gouyvvnp";
$username = "user = gouyvvnp";
$password = "password = OQgEERRV_JunhMi0iB1pBshLWbZpdKvC";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
