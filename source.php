
<?php



#$select_tbl = "SELECT * FROM form";
#$sql = mysqli_query($new_connection, $select_tbl);

#while ($abc = mysqli_fetch_assoc($sql)) {
 #   echo $abc['form_name']."&nbsp",$abc['form_no']."&nbsp",$abc['form_mail']."&nbsp",$abc['form_age']."&nbsp",$abc['form_gender']."&nbsp",$abc['form_city']."&nbsp",$abc['form_hobby']."<br>";
#}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport</title>
</head>
<body>
    <form action="search.php" method="post">


    <input type="text" name="depart" id="depart">
    <input type="text" name="arrivee" id="arrivee">

    <button type="submit">Submit</button>
    </form>
    

</body>
</html>



