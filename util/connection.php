<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = gouyvvn";
$username = "user = gouyvvn";
$password = "password = yhju9qwb4G3ot7030MyDagMicbv-kE";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
