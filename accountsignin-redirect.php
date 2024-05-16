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



<center>

<h3>Your account informations:</h1>

<?php

$nameErr=$first_name="";
if (empty($_POST["first_name"])) {
    $nameErr = "Introduceti numele!";
  } else {
    $first__name = $_POST["first_name"];
  }
?>

First name:  <?php echo $_POST["first_name"]; ?><br>
Last Name: <?php echo $_POST["last_name"]; ?><br>
Profile Name: <?php echo $_POST["profile_name"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>



<?php
//database connection 'clienti'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamestore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$profile_name=$_POST['profile_name'];
$age=$_POST['age'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$password=$_POST['password'];

$sql = "INSERT INTO accounts ( first_name, last_name,profile_name, age, email, address, city, state, password)
VALUES ('$first_name', '$last_name', '$profile_name','$age' , '$email', '$address', '$city','$state', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Welcome !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</center>
</body>
</html>