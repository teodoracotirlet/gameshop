<?php
include("connectiondb.php");

$id_account = $first_name = $last_name = $email = "";
$first_name_err = $last_name_err = $email_err = "";

// Pornim sesiunea
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION["id_account"])) {
    header("location: accountlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validare first name
    if (isset($_POST["first_name"]) && !empty(trim($_POST["first_name"]))) {
        $first_name = trim($_POST["first_name"]);
    } else {
        $first_name_err = "Please enter your first name.";
    }

    // Validare last name
    if (isset($_POST["last_name"]) && !empty(trim($_POST["last_name"]))) {
        $last_name = trim($_POST["last_name"]);
    } else {
        $last_name_err = "Please enter your last name.";
    }

    // Validare email
    if (isset($_POST["email"]) && !empty(trim($_POST["email"]))) {
        if (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $email_err = "Please enter a valid email address.";
        } else {
            $email = trim($_POST["email"]);
        }
    } else {
        $email_err = "Please enter your email address.";
    }

    // Verificăm dacă nu există erori de validare
    if (empty($first_name_err) && empty($last_name_err) && empty($email_err)) {
        $sql = "UPDATE accounts SET first_name = ?, last_name = ?, email = ? WHERE id_account = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssi", $param_first_name, $param_last_name, $param_email, $param_id_account);

            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_id_account = $_SESSION["id_account"];

            if ($stmt->execute()) {
                header("location: userprofile.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            $stmt->close();
        }
    }

    $conn->close();
}
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>">
            <span><?php echo $first_name_err; ?></span>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>">
            <span><?php echo $last_name_err; ?></span>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span><?php echo $email_err; ?></span>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>


   
<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>

</html>
