<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','gamestore') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM accounts WHERE profile_name='" . $_POST["profile_name"] . "' and password='" . $_POST["password"] . "'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
          $_SESSION["id_account"] = $row['id_account'];
        $_SESSION["profile_name"] = $row['profile_name'];
        
        $_SESSION["password"] = $row['password'];

        




        if ($_SESSION["profile_name"] == "admin") {
         
          header("Location: admin/adminpage.php");
          exit();
        } } else {
          
          header("Location: paypage.php");
          exit();
          
      }

        $message = "You are logged in now!";
        } else {
         $message = "Invalid Username or Password!";
        }
    
    if(isset($_SESSION["id_account"])) {

      
      //  header("Location:connectiondb.php");
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

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
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
  float: right;
    margin-right: 20px;
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
   
<div class="account-link">
        <?php
        if (isset($_SESSION["profile_name"])) {
            echo '<a href="userprofile.php">' . $_SESSION["profile_name"] . '</a>';

            echo '<form action="logout.php" method="post" style="display:inline-block; margin-left: 20px; ">
            <input type="submit" value="Logout" style="width: 90px; padding: 15px; font-size: 16px;">
            </form>';

            echo '<form action="updateprofile_user.php" method="post" style="display:inline-block; margin-left: 20px; ">
                  <input type="submit" value="Update Profile" style="width: 150px; padding: 15px; font-size: 16px;" >
                </form>';
        
        }
        ?>
    </div>

<br><br><br>
  <center>  
   <form name="frmUser" method="post" action="" >
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <h2 style="color:#991baa;">Enter Login Details</h3>
    Username:
    <input type="text" name="profile_name" placeholder="Your username..">
    <br>
    Password:
    <!-- <input type="password" name="password"> -->
    <input type="password" name="password"  placeholder="Your password..">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset">
    </form>

    <div>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</div></div>
</center>



<br>
  <center>  <img src="gifs/gif8.gif" style="width:25%"></center>

<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    </body>
    </html>