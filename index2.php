<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<div class="nav">
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

    <img src="bg.svg" alt="">

    

</div>
    
    <div class="se">
     <div class="con">
            <div class="title">Search Your Rides</div>
            <div class="content">
              <form action="search.php" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <input type="text" placeholder="Source" name="depart"  required>
                  </div>
                  <div class="input-box">
                    <input type="text" placeholder="Destination" name="arrivee" required>
                  </div>
                </div>
                
                <div class="button">
                  <input type="submit" value="Search">
                </div>
              </form>
            </div>
          </div>
    </div>
    

        




    <div class="cards">
        
        <div class="card">
            <div class="c">
                <img src="car.jpg" alt="car">
            </div>
            <div class="c">
                <p>Mehsana - Patan</p>
            </div>
        </div>
        <div class="card">
            <div class="c">
                <img src="car.jpg" alt="car">
            </div>
            <div class="c">
                <p>Mehsana - Ahemdabad</p>
            </div>
        </div>
        <div class="card">
            <div class="c">
                <img src="car.jpg" alt="car">
            </div>
            <div class="c">
                <p>Mehsana - Gandhinagar</p>
            </div>
        </div>
        <div class="card">
            <div class="c">
                <img src="car.jpg" alt="car">
            </div>
            <div class="c">
                <p>Mehsana - Unjha</p>
            </div>
        </div>
        <div class="card">
            <div class="c">
                <img src="car.jpg" alt="car">
            </div>
            <div class="c">
                <p>Mehsana - Unjha</p>
            </div>
        </div>

    </div>
    

    



    <script src="script.js"></script>
</body>

</html>