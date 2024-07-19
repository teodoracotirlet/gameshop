<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforcategories.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
    
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
  
  @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
  }
  
  
  
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
  
  




  .product-container {
            width: 50%;
            margin: 10px auto;
            background-color: #e5d9ff; 
            padding: 20px;
            box-sizing: border-box;
            overflow: hidden; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(212, 192, 252, 0.6);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .image-container {
            width: 45%;
            float: left;
            box-sizing: border-box;
            margin-right: 5%;
        }

        .text-container {
            width: 40%;
            box-sizing: border-box;
            text-align: center; 
            margin-left: auto;
        }

        
        .product-container::after {
            content: "";
            clear: both;
            display: table;
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


    <center>
<?php
include("connectiondb.php");

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];

    
    $genre_query = "SELECT name_genre FROM categories WHERE id_genre = $category_id";
    $genre_result = $conn->query($genre_query);

    if ($genre_result->num_rows > 0) {
        $genre_row = $genre_result->fetch_assoc();
        $genre = $genre_row['name_genre'];

        echo '<h2>' . $genre . '</h2>';


      

    $sql = "SELECT * FROM games WHERE id_genre = $category_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id_game = $row['id_game'];
            $game_name = $row['name_game'];
            $game_image = $row['image'];
           

           


echo '<div class="product-container">';
echo '<div class="image-container">';


echo "<img src='data:image/jpeg;base64," . base64_encode($game_image) . "' alt='$game_name' width='100%'><br>";
echo '</div>';

echo '<div class="text-container">';
echo "<a href='store-game-page.php?id_game=$id_game'>$game_name</a><br><br>";
echo '</div>';

echo '</div>'; 
    
        }
    } else {
        echo 'No games found for the selected category.';
    }
} else {
    echo 'Invalid category selection.';
}
}
$conn->close();
?>

</center>

<br><br><br><br>
<!--Contact Form-->
<center>

<div>
<div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
    </div>       
    </center>

    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >

</body>
</html>