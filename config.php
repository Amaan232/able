<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

$new_connection = mysqli_connect($servername, $username, $password, $database);

if (!$new_connection) {
    die("Connection Is Not Established Due to : ".mysqli_connect_error());
}
else{
    echo "Connected Successfully...!<br>";
}


?>