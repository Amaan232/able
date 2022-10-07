<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="search.css">
    <title>Document</title>
</head>
<body>
    

<header id="navbar">
        <nav class="navbar-container container">
            <a href="index2.php" class="home-link">
               <h2>Able</h2>
            </a>
            <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
                aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="navbar-menu" aria-labelledby="navbar-toggle">
                <ul class="navbar-links">
                    <li class="navbar-item"><a class="navbar-link" href="index2.php">Home</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="publish.php">Create</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>


  <div class="carpet">


  



  <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

$new_connection = mysqli_connect($servername, $username, $password, $database);

// if (!$new_connection) {
//     die("Connection Is Not Established Due to : ".mysqli_connect_error());
// }
// else{
//     echo "Connected Successfully...!<br>";
// }

$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];

// echo $std_id;
// echo $std_name;

// $search_tbl = "SELECT * FROM transport WHERE depart='$depart' AND arrivee='$arrivee' ";
// #$result = $new_connection->query($search_tbl);
// $sql = mysqli_query($new_connection, $search_tbl);

// if (!$sql) {
//     echo "Data Is Not found..!".mysqli_error($new_connection);
// }
// else{
//     echo "Data Is found";
    
//     echo "<pre>";
//     print_r($sql);
    
// }

$select_tbl = "SELECT * FROM create_ride WHERE source='$depart' AND destination='$arrivee' ";
$sql = mysqli_query($new_connection, $select_tbl);
if(mysqli_num_rows($sql)==0)
   echo "No data found" ;  
else {
    
        ?>
        <table cellspacing="20px">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>source</th>
            <th>destination</th>
        </tr>
        <?php
          while ($abc = mysqli_fetch_assoc($sql)) {
        ?>
        
            <tr>
            <td>
                <?php
                
                 echo $abc['your_name'];
                ?>
            </td>
            <td>
                <?php
                
                echo $abc['number'];
                ?>
            </td>
            <td>
                <?php
                
                echo $abc['source'];
                ?>
            </td>
            <td>
                <?php
                
                echo $abc['destination'];
                ?>
            </td>
            
            
        </tr>
        <?php
  }
  ?>
  </table>
  
        
        
        <?php
        // echo $abc['your_name']."&nbsp",$abc['number']."&nbsp",$abc['source']."&nbsp",$abc['destination']."&nbsp"."<br>";
    
}


// header("Location: index.php".$abc);


?>


  </div>

  <script src="script.js"></script>

</body>
</html>




