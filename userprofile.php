<?php
session_start();


if (!isset($_SESSION["profile_name"])) {
    header("Location: accountlogin.php");
    exit();
}


$con = mysqli_connect('localhost', 'root', '', 'gamestore') or die('Unable To connect');
$result = mysqli_query($con, "SELECT * FROM accounts WHERE profile_name='" . $_SESSION["profile_name"] . "'");
$row = mysqli_fetch_array($result);
?>


    
    <!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforhome.css">
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







.profile-container {
    background-color: #e0f7fa; 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    text-align: center;
    max-width: 600px;
    margin: auto;
}


.update-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4caf50; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 15px;
    transition: background-color 0.3s ease;
}



.update-button:hover {
    background-color: #45a049; 
}

.textprofile{

    color: #672ed9;
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
    <br>




                  
                   
<center> 


<body>



<div class="profile-container">

<title>User Profile</title>
   


    <h2>Welcome, <?php echo $_SESSION["profile_name"]; ?></h2>

    <p class = "textprofile"><strong>Email:</strong> <?php echo $row['email']; ?></p>
    <p class = "textprofile"><strong>First Name:</strong> <?php echo $row['first_name']; ?></p>
    <p class = "textprofile"><strong>Last Name:</strong> <?php echo $row['last_name']; ?></p>
    <p class = "textprofile"><strong>Address:</strong> <?php echo $row['address']; ?></p>
    <p class = "textprofile"><strong>City:</strong> <?php echo $row['city']; ?></p>
    <p class = "textprofile"><strong>State:</strong> <?php echo $row['state']; ?></p>
   
    <a href="updateprofile_user.php?id_account=<?php echo $row["id_account"]; ?>"  class="update-button">Update Profile</a>
</div>
<br>
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>
