
<?php
session_start();
include("connectiondb.php");

$query = "SELECT id_game, name_game, price, image FROM games";
$result = $conn->query($query);
?>

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
  max-width: 1100px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  font-family: 'Poppins';
  
}
.logo{
    height: 40px;
    display: block;
}

.pages{
    position: right;
}


.dropdownbtn{
    position: relative;
    display: inline-block;

}

.dropdown-content{
    display: none;
    position: absolute;
    background-color: rgb(255, 255, 255);
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgb(56,42,61);
    z-index: 1;
    font-size: 17px;
}

.dropdown-content a:hover {background-color: rgb(249, 214, 255);}
.dropdownbtn:hover .dropdown-content{display: block;}
.dropdownbtn:hover .dropdownnav{background-color: rgb(197, 79, 207);}




.buttonsnav{
  background-color: rgb(255, 255, 255);
  color: #540a6e;
  padding: 20px 10px;
  font-size: 18px;
  border: none;
  cursor: pointer;

}

.buttonsnav:hover{
  
  background-color: rgb(249, 214, 255);

}

.dropdown-content a {
    color: #382A3D;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
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



/* Slideshow */
.carousel {
            position: relative;
            width: 75%;
            height: 80vh;
            overflow: hidden;
            border-radius: 15px;
        }
        .carousel-slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
        }
        .carousel-slide.active {
            display: flex;
        }
        .carousel-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: blur(20px);
            z-index: 1;
        }
        .carousel-content {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
        }
        .carousel-image {
            max-height: 90%; 
            max-width: 50%; 
            object-fit: contain;
            cursor: pointer;
            margin-right: 10px; 
        }
        .carousel-caption {
            text-align: left;
            color: white; 
        }
        .carousel-caption h3 {
            font-size: 2rem;
            margin: 0;
        }
        .carousel-caption p {
            font-size: 1.5rem;
            margin: 0;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.5); 
            color: black; 
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 3;
        }
        .carousel-control-prev {
            left: 10px;
        }
        .carousel-control-next {
            right: 10px;
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
    
    
    $sql = "SELECT id_game, name_game, genre, price FROM games WHERE name_game LIKE ? OR genre LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        
        $searchTerm = "%$str";
        
     
        mysqli_stmt_bind_param($stmt, "ss", $searchTerm, $searchTerm);
        
       
        mysqli_stmt_execute($stmt);

        $res = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<a href='store-game-page.php?id_game=".$row['id_game']."'>".$row['name_game']."</a><br/>";
            }
        } else {
            echo "No data found";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepared statement";
    }
}
?>



</div></center>






    </header>
    <br><br>




                  
                   




<!-- Slideshow -->

<center>


<div class="carousel" id="gameCarousel">
    <?php
    include("connectiondb.php");
    $query = "SELECT id_game, name_game, price, image FROM games";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $first = true;
        while($row = $result->fetch_assoc()) {
            $imageData = base64_encode($row['image']);
            $activeClass = $first ? 'active' : '';
            $first = false;
            echo '<div class="carousel-slide ' . $activeClass . '">';
            echo '<div class="carousel-background" style="background-image: url(\'data:image/jpeg;base64,' . $imageData . '\');"></div>';
            echo '<div class="carousel-content">';
            echo '<a href="store-game-page.php?id_game=' . $row['id_game'] . '">';
            echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="' . $row['name_game'] . ' Image" class="carousel-image">';
            echo '</a>';
            echo '<div class="carousel-caption">';
            echo '<h3>' . $row['name_game'] . '</h3>';
            echo '<p>$' . $row['price'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    <button class="carousel-control carousel-control-prev" onclick="prevSlide()">&#10094;</button>
    <button class="carousel-control carousel-control-next" onclick="nextSlide()">&#10095;</button>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 3000); 
</script>

</center>
     
   

  
<br><br><br> <br>





<center>
 <img src= "gifs/descent.gif" width = "10%" ></center>


        
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








 <!-- <div>
    <a href ="test.php">Test</a></div> -->


    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>