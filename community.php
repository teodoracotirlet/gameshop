<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforcommunity.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <style> 
    /*Contact Form*/


.form-container {
  background: #aed0ff;
  border: #9dc6ff 1px solid;
  padding: 20px;
  border-radius: 2px;
  max-width: 40%;
}

.input-row {
  margin-bottom: 20px;
}

.input-row label {
  color: #25022b;
}

.input-field {
  width: 100%;
  border-radius: 2px;
  padding: 10px;
  border: #e0dfdf 1px solid;
  box-sizing: border-box;
  margin-top: 2px;
}

.span-field {
  font: Arial;
  font-size: small;
  text-decoration: none;
}

.btn-submit {
  padding: 10px 60px;
  background: #b46ebc;
  border: #70397c 1px solid;
  color: #ffffff;
  font-size: 0.9em;
  border-radius: 2px;
  cursor: pointer;
}

.errorMessage {
  background-color: #e66262;
  border: #AA4502 1px solid;
  padding: 5px 10px;
  color: #FFFFFF;
  border-radius: 3px;
}

.successMessage {
  background-color: #9fd2a1;
  border: #91bf93 1px solid;
  padding: 5px 10px;
  color: #3d503d;
  border-radius: 3px;
  cursor: pointer;
  font-size: 0.9em;
}

.info {
  font-size: .8em;
  color: #e66262;
  letter-spacing: 2px;
  padding-left: 5px;
}











.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.center-content {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.section {
    width: calc(33.33% - 20px); 
  margin-bottom: 20px;
  padding: 20px;
  background-color: #f9f9f9; 
  border-radius: 5px;
  box-shadow: 0 0 10px rgb(173, 1, 189);
  text-align: center;
}

.section h2 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

.section p {
  color: #666;
  margin-bottom: 20px;
}

.section a {
  color: #b46ebc;
  text-decoration: none;
  font-weight: bold;
}

.section a:hover {
  text-decoration: underline;
}
.section img {
  max-width: 100%; 
  height: auto; 
}


</style>
</head>


<body>
    <header>

            <!-- Navigation bar -->
        <div class = "navigationbar">
            <div clas = "logo">
                <a href = "homepage.php"><img src = "icons/logo.jpeg" alt = "logo" width= "40%"></a>
            </div>
            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "store.php">
                        <button class = "buttonsnav" >STORE</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "categories.php" class = "buttosnav">CATEGORIES</a>
                            <a href = "paypage.php" class = "buttosnav">CART</a>
                            
                        </div>
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "account.php">
                        <button class = "buttonsnav" >ACCOUNT</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "accountlogin.php" class = "buttosnav">LOG IN</a>
                            <a href = "accountsignin.php" class = "buttosnav">SIGN IN</a>
                        </div>
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "community.php">
                        <button class = "buttonsnav" >COMMUNITY</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "news.php" class = "buttosnav">NEWS</a>
                            
                        </div>
                    </div>
                    
                
            </div>

            

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "support.php">
                        <button class = "buttonsnav" >SUPPORT</button>
                        </a>
                        
                    </div>
                    
                
            </div>

        </div>


                <!--Second navigation bar -->
        
        
                   
                </div>
</div>
</div>
    
    


    </header>
    <br><br>





    <div class = "mainpart">
</div>  

            <div class = "mainpart">
                <div class = "selectbar">

                    <div class = "thirdselectcolumn">
                        <div class = "nav">
                            <nav>
                            <ul>

                                <li><a href = "reviews.php" class = "selectoption1">Reviews</a></li>
                            
                                
                                <li><a href = "screenshots.php" class = "selectoption1">Screenshots</a></li>
                            
                            
                                <li><a href = "news.php" class = "selectoption1">News</a></li>

                            <li><a href = "artwork.php" class = "selectoption1">Artwork</a><li>

                            </div>
                            </nav>
                            </ul>  

                    </div>

                

                </div>

            </div><br><br><br><br><br><br><br>



<div class="center-container">       
  <div class="container">
   
    <div class="section">
      <h2>Articles</h2>
      <div class="article">
        <h3>Review: [Game Name]</h3>
        <p>Review description...</p>
        <a href="#">Read More</a>
      </div>
     
    </div>

    
    <div class="section">
      <h2>Events</h2>
      <div class="event">
        <h3>Game Launch: [Game Name]</h3>
        <p>Event description...</p>
        <a href="#">Learn More</a>
      </div>
   
    </div>

   
    <div class="section">
      <h2>Image Gallery</h2>
      <div class="image">
        <img src="images/image1.jpg" alt="Image 1">
      </div>
      
    </div>

   
    <div class="section">
      <h2>Poll: Favorite Game?</h2>
      <ul>
        <li><input type="radio" name="game" value="game1"> Game 1</li></br>
        <li><input type="radio" name="game" value="game2"> Game 2</li>
      
      </ul>
      <button>Vote</button>
    </div>

    
    <div class="section">
      <h2>Contest: Best Game Screenshot</h2>
      <p>Contest details...</p>
      <a href="#">Enter Now</a>
    </div>

    <div class="section">
      <h2>Comments</h2>
      <p><strong>User Name:</strong> User comment...</p>
    </div>

  
    <div class="section">
      <h2>Useful Links</h2>
      <ul>
        <li><a href="forums.php">Gaming Forums</a></li>
        <li><a href="news.php">Gaming Industry News</a></li>
   
      </ul>
    </div>

  
    <div class="section">
      <h2>Gamer Resources</h2>
      <ul>
        <li><a href="tutorials.php">Skill Improvement Tutorials</a></li>
        <li><a href="guides.php">Guides for Optimal Setup</a></li>
      
      </ul>
    </div>
  </div>

</div>
    
<br><br><br>

<div class = "mainpart">
</div>

            </div>
    <div class = "gif">
        <img src = "gifs/gif1.gif">
    </div>
<br><br><br>



<br><br>
<!--Contact Form-->

<center>

<?php


$servername = "localhost";
$username = "";
$password = "";
$dbname = "gamestore"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

   
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='successMessage'>Form submitted successfully!</p>";
    } else {
        echo "<p class='errorMessage'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>

<div class="form-container">
    <form method="post" action="">
        <div class="input-row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="input-field" required>
        </div>

        <div class="input-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="input-field" required>
        </div>

        <div class="input-row">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="input-field" required>
        </div>

        <div class="input-row">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="input-field" rows="4" required></textarea>
        </div>

        <input type="submit" value="Submit" class="btn-submit">
    </form>
</div>

  </center>

    </div></div></div></center>
   



    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >



</body>
</html>