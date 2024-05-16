<?php
// Include your database connection file
include("connectiondb.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id_account = $_POST["id_account"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $profile_name = $_POST["profile_name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];

    // Update user profile in the database
    $sql = "UPDATE accounts SET
            first_name = '$first_name',
            last_name = '$last_name',
            profile_name = '$profile_name',
            age = '$age',
            email = '$email',
            address = '$address',
            city = '$city',
            state = '$state'
            WHERE id_account = '$id_account'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to user profile page after successful update
        header("Location: userprofile.php");
        exit;
    } else {
        // Handle database error
        echo "Error updating profile: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

// Retrieve user profile information for the form
$id_account = isset($_GET["id_account"]) ? $_GET["id_account"] : null; // You may need to sanitize and validate this input

if (!$id_account) {
    // Handle the case where id_account is not set
    echo "Profile not found!";
    exit;
}

$sql = "SELECT * FROM accounts WHERE id_account = '$id_account'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $profile_name = $row['profile_name'];
    $age = $row['age'];
    $email = $row['email'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
} else {
    // Handle profile not found
    echo "Profile not found!";
    exit;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforaccount.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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






.slideshow-wrapper {
    position: relative;
    margin: auto;
    text-align: center;
    overflow: hidden;
    padding: 10px; /* Add some padding to create space */
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
    margin: 0 10px; /* Add margin to create space between arrows and slideshow */
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



form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #e0f7fa;;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
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










    </header>

    <center>
    <h2>Update Profile</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="hidden" name="id_account" value="<?php echo $id_account; ?>">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br>

        <label for="profile_name">Profile Name:</label>
        <input type="text" name="profile_name" value="<?php echo $profile_name; ?>"><br>

        <label for="age">Age:</label>
        <input type="number" name="age" value="<?php echo $age; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>"><br>

        <label for="city">City:</label>
        <input type="text" name="city" value="<?php echo $city; ?>"><br>

        <label for="state">State:</label>
        <input type="text" name="state" value="<?php echo $state; ?>"><br>

        <button type="submit">Update Profile</button>
    </form></center>

   
<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>

</html>
