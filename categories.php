<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforcategories.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<style>
    


    .category-buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-content: space-between;
}

.category-button {
  display: block;
  margin-bottom: 10px;
  padding: 10px;
  background-color: #dd6efb;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  height: 40px;
  
}

.category-button:hover {
  background-color: #8f25c8;
}



  .pill-nav a {
    display: inline-block;
    color: rgb(61, 0, 174);
    text-align: center;
    padding: 30px;
    text-decoration: none;
    font-size: 30px;
    border-radius: 10px;
  }
  
  .pill-nav a:hover {
    background-color: #c96cdb;
    color: black;
  }
  
  .pill-nav a.active {
    background-color: rgb(131, 30, 255);
    color: white;
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
                        <img src="gifs/gif11.gif" style="width:15%">
                    </div>
</div>
</div>
    


    </header>
    <br><br><br>

   
   

<center><h1 style="color:#4a0082">Categories</center>


        <br>
        

<center>


<?php
// Include your database connection file
include("connectiondb.php");

// Fetch categories from the database
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output categories as buttons in rows of three
    echo '<div class="category-buttons">';
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        $category_id = $row['id_genre'];
        $category_name = $row['name_genre'];

        // Output category as a button
        echo "<a href='category_page.php?category_id=$category_id' class='category-button'>$category_name</a>";

        // Start a new row after every three buttons
        $count++;
        if ($count % 3 === 0) {
            echo '</div><div class="category-buttons">';
        }
    }
    echo '</div>';
} else {
    echo 'No categories found in the database.';
}

// Close the database connection
$conn->close();
?>




    <!-- <div class="pill-nav">
    <a href="category_page.php?id_genre=1">Action</a>
    <a href="category_page.php?category_id=2">Adventure</a>
    <a href="category_page.php?category_id=3">Role-Playing</a>
    </div> 

<br><br>
    <div class="pill-nav">
    <a href="category_page.php?category_id=4">Survival</a>
    <a href="category_page.php?category_id=5">Strategy</a>
    <a href="category_page.php?category_id=6">Sports</a>
</div>  -->
</center>



<br><br><br><br>


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