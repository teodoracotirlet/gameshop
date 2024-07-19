<?php
session_start();
include("connectiondb.php"); 
$id_game = isset($_SESSION['id_game']) ? $_SESSION['id_game'] : null;

if (isset($_GET['id_game'])) {
    $id_game = $_GET['id_game'];
    $sql = "SELECT * FROM games WHERE id_game = $id_game";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name_game = $row['name_game'];
        $genre = $row['genre'];
        $price = $row['price'];
        $image = $row['image'];
    } else {
        echo "Product not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforstore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>

.container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 800px;
        margin: auto;
        background-color: #bdddff; 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(151, 113, 255, 0.51); 
    }

    .button1 {
        padding: 15px 25px;
        font-size: 18px;
        cursor: pointer;
        background-color: #b45dc9;
        color: white;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease; 
    }

    .button1:hover {
        background-color: #853f96;
    }

    h2,
    p {
        margin-top: 0;
    }

    .game-image {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }

    .highlight {
        background-color: #fab784; 
        padding: 5px;
        border-radius: 5px;
        display: inline-block;
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

   
         
<br><br>

    <center>

 <div class="container">


<div class="image-container">
        <img class="game-image" src='data:image/jpeg;base64,<?php echo base64_encode($image); ?>' alt='<?php echo $name_game; ?> Image'>
    </div>


    <div class="text-container">
<h2><?php echo $name_game; ?> Details</h2>


<button onclick="addToCart(<?php echo $id_game; ?>, '<?php echo $name_game; ?>', <?php echo $price; ?>)"class="button1">Add to Cart</button>

<p>Genre: <span class="highlight"><?php echo $genre; ?></span></p>
<p>Price: $<?php echo $price; ?></p>
    </div>
</div>
<script>
    // function addToCart(id_game, name_game, price) {
       
    //     var xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function () {
    //         if (xhr.readyState == 4 && xhr.status == 200) {
               
    //             window.location.href = 'paypage.php';
    //         }
    //     };

        
    //     var data = "&id_game=" + id_game + "&name_game=" + encodeURIComponent(name_game) + "&price=" + price;
    //     xhr.open("POST", "addToCart.php", true);
    //     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhr.send(data);
    // }
    function addToCart(id_game, name_game, price) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        window.location.href = 'paypage.php';
                    }
                };
                var data = "id_game=" + id_game + "&name_game=" + encodeURIComponent(name_game) + "&price=" + price;
                xhr.open("POST", "addToCart.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send(data);
            }
</script>

  </center>




<img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
    <img src= "gifs/grass4.gif" width = "24.25%" >
</body>
</html>