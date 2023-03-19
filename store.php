<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforstore.css">
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
                            <a href = "store.php" class = "buttosnav">HOME</a>
                            <a href = "store.php" class = "buttosnav">WISHLIST</a>
                            <a href = "store.php" class = "buttosnav">ABOUT</a>
                            <a href = "store.php" class = "buttosnav">POINTS</a>
                        </div>
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "account.php">
                        <button class = "buttonsnav" >ACCOUNT</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "store.php" class = "buttosnav">HOME</a>
                            <a href = "store.php" class = "buttosnav">WISHLIST</a>
                            <a href = "store.php" class = "buttosnav">STORE</a>
                        </div>
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "communtity.php">
                        <button class = "buttonsnav" >COMMUNITY</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "store.php" class = "buttosnav">HOME</a>
                            <a href = "store.php" class = "buttosnav">WISHLIST</a>
                            <a href = "store.php" class = "buttosnav">STORE</a>
                        </div>
                    </div>
                    
                
            </div>

            

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "support.php">
                        <button class = "buttonsnav" >SUPPORT</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "store.php" class = "buttosnav">HOME</a>
                            <a href = "store.php" class = "buttosnav">WISHLIST</a>
                            <a href = "store.php" class = "buttosnav">STORE</a>
                        </div>
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
                            <div class = "dropdown-content">
                                    <a href = "store.php" class = "buttosnav">HOME</a>
                                    <a href = "store.php" class = "buttosnav">WISHLIST</a>
                                    <a href = "store.php" class = "buttosnav">STORE</a>
                                </div>
                            
                            <li><a href = "categories.php" class = "secondbarpage">Categories</a></i>
                        
                        
                            <li><a href = "store-points.php" class = "secondbarpage">Points</a></li>

                            </ul>

                    </div>
                    <div class = "scndbar1">
                        <div class = "search-bar">
                            <input type = "text" class = "searchterm" placeholder = "Search...">
                            <button type = "submit" class = "searchbutton">
                                <i class = "isearch"></i>
                            </button>
                        </div>
                    </div>
                </div>
            
            
        
            <div class = "thirdcolumnempty">
            </div>

            
        </div>
        </div>
    


    </header>
    <br><br><br><br>



    <div class = "emptycolumn">
    </div>

    <div class = "mainpart">
        <div class = "slideshow">
        <div class="slideshow-container">
                <div class="slideshow-inner">
                <div class="mySlides fade">

                    <img  src="slideshow1/minecraft.jpg" style="width: 100%;" alt="sally lightfoot crab"/>
                    <div class="text">Sally Lightfoot Crab</div>
                </div>

                <div class="mySlides fade">

                    <img  src="slideshow1/stardewvalley.jpeg" style="width: 100%;" alt="fighting nazca boobies"/>
                    <div class="text">A scuffle between two Nazca Boobies</div>
                </div>

                <div class="mySlides fade">

                    <img  src="slideshow1/undertale.jpg" style="width: 100%;" alt="otovalo waterfall"/>
                    <div class="text">A waterfall discovered on a hike in Otovalo</div>
                </div>

               
                
                </div>


                <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
                <a class="next" onclick='plusSlides(1)'>&#10095;</a>
                </div>
                <br/>


                <div style='text-align: center;'>
                <span class="dot" onclick='currentSlide(1)'></span>
                <span class="dot" onclick='currentSlide(2)'></span>
                <span class="dot" onclick='currentSlide(3)'></span>
                
                </div>

                </div>


                        </div>
    </div>

    <div class = "emptycolumn">
    </div>




</body>
</html>