

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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet"> -->

    <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">




    
<style>



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


        @media screen and (max-width: 768px) {
    .account-link {
        margin-right: 0; /* Adjust for smaller screens */
    }

    .account-link a {
        padding: 10px; /* Adjust padding for smaller screens */
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





/* Slideshow */

.slider {
    width: 90%;
    height: 510px;
    position: relative;
  }

  .slider img {
    width: 100%;
    height: 500px;
    position: absolute;
    top: 0;
    left: 0;
    /* transition: all 0.5s ease-in-out; */
  }

  .slider img:first-child {
    z-index: 1;
  }

  .slider img:nth-child(2) {
    z-index: 0;
  }

  .navigation-button {
    text-align: center;
    position: relative;
  }

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
  }

  .active,
  .dot:hover {
    background-color: #717171;
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


    <br>




   


<body>
<!-- Slideshow -->


 <center> 

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



<script>
    var currentImg = 0;
  var imgs = document.querySelectorAll('.slider img');
  let dots = document.querySelectorAll('.dot');
  var interval = 3000;

//   // Second banner
//   var secondEventTitle = 'Hi! *Freshmen* Orientation Day';

//   // Third banner
//   var thirdEventDate = new Date('2023-02-01'); // pull this from database
//   var thirdEventDateString = thirdEventDate.toLocaleDateString('en-us', { year: 'numeric', month: 'short', day: 'numeric' });
//   var days = calculateDays(new Date(), thirdEventDate) || 0;
//   const countdownText = days > 0 ? `${days} days left` : 'Live Now!';

//   var secondImageUrl = `https://ondemand.bannerbear.com/simpleurl/01YWAxB7nGYdJrKoXM/title/text/${encodeURIComponent(secondEventTitle)}`;
//   var thirdImageUrl = `https://ondemand.bannerbear.com/simpleurl/ley9O0B2ZGbB4GjRDY/date/text/${encodeURIComponent(
//     thirdEventDateString
//   )}/countdown/text/${encodeURIComponent(countdownText)}`;

  document.getElementById('img-2').src = secondImageUrl;
  document.getElementById('img-3').src = thirdImageUrl;

  var timer = setInterval(changeSlide, interval);

  function changeSlide(n) {
    for (var i = 0; i < imgs.length; i++) {
      imgs[i].style.opacity = 0;
      dots[i].className = dots[i].className.replace(' active', '');
    }

    currentImg = (currentImg + 1) % imgs.length;

    if (n != undefined) {
      clearInterval(timer);
      timer = setInterval(changeSlide, interval);
      currentImg = n;
    }

    imgs[currentImg].style.opacity = 1;
    dots[currentImg].className += ' active';
  }

  function calculateDays(today, eventDate) {
    const difference = eventDate.getTime() - today.getTime();

    return Math.ceil(difference / (1000 * 3600 * 24)); // convert to days
  }
</script>

</center>

<br><br><br><br><br><br>

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
        // Add to Cart button can be included here if needed
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p>No products found.</p>';
}

// Close the database connection
$conn->close();
?>

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



<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>