
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>transport</title>
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
                    <li class="navbar-item"><a class="navbar-link" href="add.php">Create</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <form action="insert.php" method="post">


    <input type="text" name="depart" id="depart">
    <label>Source</label><br>
    <input type="text" name="arrivee" id="arrivee">
    <label>Destination</label><br>
    <button type="submit">Submit</button>
    </form>
  

</body>
</html>

