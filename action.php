<?php

    include 'config.php';

    $name = $_POST['rider_name'];
    $number = $_POST['phone_no'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $car_no = $_POST['car_no'];
    $seat = $_POST['seat'];

    $insert_tbl = "INSERT INTO create_ride VALUES('','$name' , '$number','$source','$destination','$car_no','$seat')";

    $sql = mysqli_query($new_connection, $insert_tbl);

if (!$sql) {
    echo "Data Is Not Inserted..!".mysqli_error($new_connection);
}
else{
    echo "Data Is Inserted";
}

header("Location: index2.php".$abc);

?>