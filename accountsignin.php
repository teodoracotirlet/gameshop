<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','gamestore') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM accounts WHERE id_account='" . $_POST["id_account"] . "'and first_name='" . $_POST["first_name"] . "' and last_name= '". $_POST["last_name"]."'and profile_name='" . $_POST["profile_name"] . "' and age='" . $_POST["age"] . "' and email='" . $_POST["email"] . "' and address='" . $_POST["address"] . "'and city='" . $_POST["city"] . "'and state='" . $_POST["state"] . "'and password='" . $_POST["password"] . "'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id_account"] = $row['id_account'];
        $_SESSION["first_name"] = $row['first_name'];
        $_SESSION["last_name"] = $row['last_name'];
        $_SESSION["profile_name"] = $row['profile_name'];
        $_SESSION["age"] = $row['age'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["address"] = $row['address'];
        $_SESSION["city"] = $row['city'];
        $_SESSION["state"] = $row['state'];
        $_SESSION["password"] = $row['password'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id_account"])) {
    header("Location:connectiondb.php");
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

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #f6b3ff;
    border-radius: 4px;
    box-sizing: border-box;
  }


  input[type=submit] {
  width: 20%;
  background-color: #b02dc1;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 20%;
  background-color: #b02dc1;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #991baa;
}

input[type=reset]:hover {
  background-color: #991baa;
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
</div>
</div>
    



    </header>
    <br><br>
    
<div><div></div>
 <center>   <h2 style="color:#991baa;">Enter your informations:</h1>

<form action="accountsignin-redirect.php" method="POST" >
    First Name: <input type="text" name="first_name" required placeholder="Your first name.."><br> 
   Last Name: <input type="text" name="last_name" required placeholder="Your last name.."><br> 
   Profile Name: <input type="text" name="profile_name" required placeholder="Your profile name.."><br> 
   Age: <input type="text" name="age" required placeholder="Your age.."><br>
   
   Email: <input type="text" name="email" required placeholder="Your email.."><br>
   Address: <input type="text" name="address" required placeholder="Your address.."><br>
   City: <input type="text" name="city" required placeholder="Your city.."><br>
   State: <input type="text" name="state" required placeholder="Your state.."><br>
   Password: <input type="text" name="password" required placeholder="Your password.."><br>
   
   <input type="reset" value="Reset">
   <input type="submit" value="Submit">
</form>
</center>

<br><br>
<center><img src="gifs/gif9.gif" style="width:25%"></center>




<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    </body>
    </html>