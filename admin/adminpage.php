<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforadminpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
        
       


    </header>
    <br><br>
    <h2 style="text-align: center;color: #680CFF">ADMIN PAGE</h2>

    
    <br>
<center>
    <div>
        <div class = "row">
            <div class = "cell">
                <a href = "users.php"> 
                <button class = "button1" style="vertical-align:middle"><span>ACCOUNTS</span></button>
                </a><br>
            </div>
        </div>
    </div>
    <div class = "row">
        <div class = "cell">
            <a href = "products.php">
            <button class = "button1" style="vertical-align:middle"><span>PRODUCTS</span></button>
            </a>
        </div>
</div>
<div class = "row">
        <div class = "cell">
            <a href = "statistics.php">
            <button class = "button1" style="vertical-align:middle"><span>STATISTICS</span></button>
            </a>
        </div>
</div>

</center>
    <br><br>
    
</body>
</html>