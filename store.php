

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforstore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <meta content="" name="keywords">
    <meta content="" name="description">

   
    <link href="img/favicon.ico" rel="icon">

    
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet"> -->

    
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/style.css" rel="stylesheet">




    
<style>


/* Slideshow */
.slideshow {
        position: relative;
        width: 100%;
        height: 500px; /* Ajustează în funcție de necesități */
        overflow: hidden;
        margin: auto;
        border-radius: 15px;
    }

    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
    }

    .slide {
        flex: 0 0 100%; /* Fiecare slide să ocupe 100% din lățime */
        height: 100%;
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
    }

    .slide img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain; /* Redimensionare imagine pentru a incadra complet */
        position: relative;
        z-index: 2; /* Asigură că imaginea produsului este deasupra fundalului */
    }

    .slide::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        filter: blur(20px); /* Aplică filtru de blur */
        z-index: 1; /* Asigură că fundalul blurat este în spatele imaginii */
    }

    
    .control {
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

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
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



.img-fluid {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.store-item {
    max-width: 400px;
    margin: 15px auto;
    box-sizing: border-box;
}
.row {
    margin-right: 0;
    margin-left: 0;
}


.p-4 {
    padding: 10px; }









  /* Sort */
/* 
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}


.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #ddd;}


.dropdown:hover .dropdown-content {display: block;}


.dropdown:hover .dropbtn {background-color: #2980B9;}
 */

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
                        <img src="gifs/gif5.gif" style="width:25%">
                    </div>

                        
                
           
            </div>
        </div>
    


    </header>
    <br><br><br><br>



    <div class = "emptycolumn">
        
    </div>

    <!-- <div class = "mainpart"> -->
        
 

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


    <br><br><br>




   


<body>

<!-- Slideshow -->

<!-- Slideshow -->

<center>
        <div class="slideshow" id="gameCarousel">
        <div class="slides">
            <?php
            include("connectiondb.php");
            $query = "SELECT id_game, name_game, price, image FROM games";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="slide">';
                    echo '<a href="store-game-page.php?id_game=' . $row['id_game'] . '">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="' . $row['name_game'] . '">';
                    echo '</a>';
                    echo '<div class="caption">';
                    echo '<h3>' . $row['name_game'] . '</h3>';
                    echo '<p>$' . $row['price'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
        <button class="control prev" onclick="prevSlide()">&#10094;</button>
        <button class="control next" onclick="nextSlide()">&#10095;</button>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            if (index < 0) {
                index = totalSlides - 1;
            } else if (index >= totalSlides) {
                index = 0;
            }
            const offset = -index * 100;
            document.querySelector('.slides').style.transform = 'translateX(' + offset + '%)';
            currentSlide = index;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(nextSlide, 3000); // Schimbă slide-ul automat la fiecare 3 secunde
    </script>
    </center>
<br><br><br><br><br><br>
<!-- 
<div class="dropdown">
  <button class="dropbtn">Sortare</button>
  <div class="dropdown-content">
    <a href="#" onclick="applyFilters('asc')">Preț - Crescător</a>
    <a href="#" onclick="applyFilters('desc')">Preț - Descrescător</a>
    <a href="#" onclick="applyFilters('nameAsc')">Nume - A la Z</a>
    <a href="#" onclick="applyFilters('nameDesc')">Nume - Z la A</a>
  </div>
</div> -->

<br><br><br>
<?php

include("connectiondb.php");


$sql = "SELECT id_game, name_game, price, image FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="row g-4">';

    while ($row = $result->fetch_assoc()) {
        $id_game = $row['id_game'];
        $name_game = $row['name_game'];
        $price = $row['price'];
        $image = $row['image'];

       
        echo '<div class="col-lg-4 col-md-6 mb-4">';
        echo '<div class="store-item position-relative text-center">';
        echo '<img class="img-fluid" src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="' . $name_game . '">';
        echo '<div class="p-4">';
        echo '<div class="text-center mb-3">';
        echo '<small class="fa fa-star " style="color:#C436D4"></small>';
        echo '<small class="fa fa-star " style="color:#C436D4"></small>';
        echo '<small class="fa fa-star " style="color:#C436D4"></small>';
        echo '<small class="fa fa-star " style="color:#C436D4"></small>';
        echo '<small class="fa fa-star " style="color:#C436D4"></small>';
        echo '</div>';
        echo '<h4 class="mb-3">' . $name_game . '</h4>';
        echo '<h4 style="color:#C436D4">$' . $price . '</h4>';
        echo '</div>';
        echo '<div class="store-overlay">';
        echo '<a href="store-game-page.php?id_game=' . $id_game . '" class="btn btn-dark rounded-pill py-2 px-4 m-2" style="color:#C436D4">BUY <i class="fa fa-arrow-right ms-2"></i></a>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p>No products found.</p>';
}


$conn->close();
?>

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



<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >

<!-- 
<script>
 function applyFilters(sortOrder) {
    var priceMin = prompt("Introduceți prețul minim:", "0");
    var priceMax = prompt("Introduceți prețul maxim:", "100");

    // Trimite datele către server pentru a aplica filtrele și a solicita produsele actualizate
    fetchProducts(priceMin, priceMax, sortOrder);
}

function fetchProducts(priceMin, priceMax, sortOrder) {
    // Trimite o cerere GET către server pentru a obține produsele filtrate și sortate
    var url = "get_products.php?priceMin=" + priceMin + "&priceMax=" + priceMax + "&sortOrder=" + sortOrder;

    fetch(url)
    .then(response => response.text())
    .then(data => {
        document.getElementById("productList").innerHTML = data; // Afișează rezultatele în div-ul "productList"
    })
    .catch(error => console.error('Error:', error));
}

  </script>
     -->
</body>
</html>

