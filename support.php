<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforsupport.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style> 
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
















.mainpart {
  width: 75%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
  gap: 20px; 
}

.dropdown-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; 
    justify-content: center;
    margin-top: 20px;
}




.emptycolumn{
  width:25%;
  float:left;
  height:280px;
}
.h2{
  color:#a900b2;
}



.emptycolumn2{
  width:25%;
  float:right;
  height:280px;
}

  a {
    text-decoration: none;
    color: #000000;
  }
  
  a:hover {
    color: #222222
  }
  
  
  
  .dropdown {
    flex: 0 0 calc(50% - 20px); 
    margin-bottom: 20px; 
    position: relative;
}



  ..dd-button {
    display: inline-block;
    border: 1px solid rgb(221, 107, 255);
    border-radius: 4px;
    padding: 10px 20px;
    background-color: #a900b2;
    cursor: pointer;
    white-space: nowrap;
    position: relative; 
}

.dd-button:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid white; 
}
  
  .dd-button:hover {
    background-color: #e28bff;
  }
  
  
  .dd-input {
    display: none;
  }
  
  .dd-menu {
    width: auto;
    position: absolute;
    top: 100%;
    left: 0; 
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
    background-color: #c200e4;
    list-style-type: none;
    z-index: 1;
}


.dd-input + .dd-menu {
    display: none;
}

.dd-input:checked + .dd-menu {
    display: block;
}

.dd-menu li {
    padding: 10px;
    cursor: pointer;
    white-space: nowrap;
    text-align: center;
}


.dd-menu li:hover {
    background-color: #90008d;
}

.dd-menu li a {
    display: block;
    margin: -10px -20px;
    padding: 10px 20px;
}

.dd-menu li.divider {
    padding: 0;
    margin: 5px 0; 
    border-bottom: 1px solid #cccccc;
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
                            <a href = "community.php" class = "buttosnav">NEWS</a>
                            
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


        <div class = "secondbarcontent">
            <div class = "secondbar">
                <div class = "firstcolumnempty">
                    
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
    


   
    <br><br><br><br>
   
       
            <div class = "text1">
                <h2><center>Do you need help?</center></h2>
</div>

<br><br><br>
    
<center>
<div class="mainpart">
    <div class="dropdown-container">
        <label class="dropdown">
            <div class="dd-button">
                Client
            </div>
            <input type="checkbox" class="dd-input" id="test">
            <ul class="dd-menu">
                <li>Client Troubleshooting</li>
                <li>Can't Login</li>
                <li class="divider"></li>
            </ul>
        </label>

        <label class="dropdown">
            <div class="dd-button">
                Purchases
            </div>
            <input type="checkbox" class="dd-input" id="test">
            <ul class="dd-menu">
                <li>I can't complete my purchase</li>
                <li class="divider"></li>
            </ul>
        </label>
        
        <label class="dropdown">
            <div class="dd-button">
                Account
            </div>
            <input type="checkbox" class="dd-input" id="test">
            <ul class="dd-menu">
                <li>Manage account details(email, password, payment)</li>
                <li>Help me sign in to my account</li>
            </ul>
        </label>
    </div>
</div>
</center>

<br><br><br><br><br><br>



<center><img src = "gifs/mario.gif" width= "40%"></center>



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

    </div></div></div></center>




    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>