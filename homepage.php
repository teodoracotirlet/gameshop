


<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforhome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->



<style>


.navigationbar{
    max-width: 1300px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    font-family: 'Poppins';
    
}

.buttonsnav{
    background-color: rgb(253, 253, 253);
    color: #540a6e;
    padding: 16px;
    font-size: 19px;
    border: none;

}

.buttonsnav:hover{
    
    background-color: rgb(249, 214, 255);

}









  .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #c9a6d6;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #a237d8;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #e5b0ff;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #6527ac;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #3f0f76;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


.searchbar input[type=textbox] {
  padding: 10px;
  margin-top: 10px;
  font-size: 17px;
  border: inset;
  color: #991baa;
}

.searchbar input[type=submit] {
  
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ff2db6;
  font-size: 17px;
  border: none;
  cursor: pointer;
}






.slideshow-wrapper {
    position: relative;
    margin: auto;
    text-align: center;
    overflow: hidden;
    padding: 10px; 
}

#slideshow-container {
    width: 800px;
    height: 400px;
    position: relative;
    margin: auto;
    text-align: center;
    overflow: hidden;
    align-items: center;
}

.button-container {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.arrow {
    font-size: 36px;
    cursor: pointer;
    color: #ff19d5;
    position: relative;
    display: inline-block;
    transition: color 0.3s;
    margin: 0 10px; 
}

.arrow::before,
.arrow::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 90%;
    top: 0;
    left: 0;
    transition: inherit;
    align-items: center;
}

.arrow::before {
    box-shadow: -10px 0 10px rgba(255, 190, 224, 0.8) inset;
    left: 0;
}

.arrow::after {
    box-shadow: 10px 0 10px rgba(255, 135, 197, 0.8) inset;
    right: 0;
}

.arrow:hover {
    color: #d611b2;
}








@media screen and (max-width: 768px) {
    .account-link {
        margin-right: 0;
    }

    .account-link a {
        padding: 10px;
    }
}

.account-link {
    margin-right: 150px;
}

.account-link a {
    color: #d98648;
    text-decoration: none;
    padding: 20px;
}




/* Slideshow */

.slider-container {
    width: 70%;
    margin: 0 auto;
    text-align: center; 
    position: relative;
    
  }

  .slider {
    width: 100%;
    height: 500px;
    position: relative;
  }

  .slider img {
    width: 60%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  .navigation-button {
    position: absolute;
    bottom: 10px;
    width: 100%;
  }

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #6f57de;
    border-radius: 50%;
    display: inline-block;
  }

  .active,
  .dot:hover {
    background-color: #2202b3;
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
        
        <div class = "secondbarcontent">
            <div class = "secondbar">
                <div class = "firstcolumnempty">
                    


                
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="reccomandations.php">Reccomandations</a>
  <a href="account.php">Account</a>
  <a href="store.php">Store</a>
  <a href="news.php">News</a>

  <br>

  <div class="account-link">
        <?php
        if (isset($_SESSION["profile_name"])) {
            echo '<a href="userprofile.php">' . $_SESSION["profile_name"] . '</a>';

            echo '<form action="logout.php" method="post" style="display:inline-block; margin-left: 20px; ">
                    <input type="submit" value="Logout" style="padding: 10px 15px; font-size: 16px;">
                  </form>';
        // } else {
        //     echo '<a href="accountlogin.php">Login</a>';
        // }
        }
        ?>
    </div>

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  
  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>






                </div>

                <div class = "secondbar-content">

                    <div class = "scndbar1">
                            <ul>

                            <li><a href = "news.php" class = "secondbarpage">News</a></li>
                          
                            
                            <li><a href = "categories.php" class = "secondbarpage">Categories</a></i>
                            
                        
                            
                            
                            </ul><br>
                           
                    </div>
                    
                   
                </div>
                
                <div class = "thirdcolumnempty">
                        <img src="gifs/gif12.gif" style="width:25%">
                    </div>
</div>
</div>

<!-- Search Bar -->

    <center> <div class ="searchbar">

    <form method="post">
	<input type="textbox" name="str" required placeholder = "Search..."/>
	<input type="submit" name="submit" value="Submit"/>
</form>

<?php
include('connectiondb.php');

if (isset($_POST['submit'])) {
    if (!isset($conn)) {
        include('connectiondb.php');
    }
    
    $str = mysqli_real_escape_string($conn, $_POST['str']);
    
    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT id_game, name_game, genre, price FROM games WHERE name_game LIKE ? OR genre LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Set the search term
        $searchTerm = "%$str";
        
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $searchTerm, $searchTerm);
        
        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get result
        $res = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<a href='store-game-page.php?id_game=".$row['id_game']."'>".$row['name_game']."</a><br/>";
            }
        } else {
            echo "No data found";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepared statement";
    }
}
?>



</div></center>






    </header>
    <br><br><br>




                  
                   



<body>
<!-- Slideshow -->

<center>

<div class="slider-container">
    <div class="slider">
        <img src="slideshow1/undertale.jpg" style="width:90%">
        <img src="slideshow1/godofwar.jpeg" style="width:90%">
        <img src="slideshow1/genshimimpact.jpeg" style="width:90%">
        <img src="slideshow1/stardewvalley2.jpg" style="width:90%">
        
    </div>
    <div class="navigation-button">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
        <span class="dot" onclick="changeSlide(3)"></span>
    </div>
</div>



<script>
var currentImg = 0;
    var imgs = document.querySelectorAll('.slider img');
    let dots = document.querySelectorAll('.dot');
    var interval = 3000;
    var timer = setInterval(changeSlide, interval);

    function changeSlide(n) {
        for (var i = 0; i < imgs.length; i++) {
            imgs[i].style.opacity = 0;
            dots[i].classList.remove('active');
        }

        currentImg = (n !== undefined) ? n : (currentImg + 1) % imgs.length;

        imgs[currentImg].style.opacity = 1;
        dots[currentImg].classList.add('active');
    }

</script>

</center>



<!--Slideshow-->
<!-- <div class="slideshow-wrapper">
<div id="slideshow-container">
    <?php
    include("connectiondb.php"); 
    $sql = "SELECT * FROM games LIMIT 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $games = $result->fetch_all(MYSQLI_ASSOC);

        foreach ($games as $index => $game) {
            echo '<div class="slide" id="slide' . $index . '">';
            echo '<a href="store-game-page.php?id_game=' . $game['id_game'] . '"><img class="slideshow-img" src="data:image/jpeg;base64,' . base64_encode($game['image']) . '" alt="' . $game['name_game'] . '"></a>';
            echo '</div>';
        }
    }
    ?>
</div>

<div class="button-container">
    <span class="arrow" onclick="previousSlide()">&#9664;</span>
    <span class="arrow" onclick="nextSlide()">&#9654;</span>
</div>
</div>
<script>
    var currentSlideIndex = 0;
    var slides = document.getElementsByClassName("slide");

    showSlide(currentSlideIndex);

    function showSlide(index) {
        if (index < 0) {
            currentSlideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            currentSlideIndex = 0;
        } else {
            currentSlideIndex = index;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[currentSlideIndex].style.display = "block";
    }

    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    function previousSlide() {
        showSlide(currentSlideIndex - 1);
    }

    setInterval(nextSlide, 3000); 
</script> -->



       </center>  
   

  
<br><br><br> 





<center>
 <img src= "gifs/descent.gif" width = "30%" ></center>


        
<br><br>

                        


<!--Contact Form-->

<center>

<?php
// Database connection

$servername = "localhost";
$username = "";
$password = "";
$dbname = "gamestore"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into the database
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








 <!-- <div>
    <a href ="test.php">Test</a></div> -->


    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>