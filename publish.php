<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="upper">
        <div class="con">
            <div class="title">Create your journey</div>
            <div class="content">
              <form action="action.php" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Your Name</span>
                    <input type="text" placeholder="Enter your name" name="rider_name" id="rider_name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Phone Number" name="phone_no" id="phone_no" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Source</span>
                    <input type="text" placeholder="Source" name="source" id="source" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Destination</span>
                    <input type="text" placeholder="Destination" name="destination" id="destination" required>
                  </div>
                  
                  <div class="input-box">
                    <span class="details">Vehicle Number</span>
                    <input type="text" placeholder="Vehicle Number" name="car_no" id="car_no" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Available Seats</span>
                    <input type="number" placeholder="Available Seats" name="seat" id="seat" required>
                  </div>
                </div>
                
                <div class="button">
                  <input type="submit" value="Create">
                </div>
              </form>
            </div>
          </div>
    </div>
  
    <script src="script.js"></script>
</body>
</html>