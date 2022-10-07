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

$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];

// echo $std_id;
// echo $std_name;

$insert_tbl = "INSERT INTO transport VALUES('','$depart','$arrivee')";

$sql = mysqli_query($new_connection, $insert_tbl);

if (!$sql) {
    echo "Data Is Not Inserted..!".mysqli_error($new_connection);
}
else{
    echo "Data Is Inserted";
}
header("Location: index2.php".$abc);
exit;
?>