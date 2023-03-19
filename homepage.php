<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforhome.css">
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

                    
                    <div class = "scndbar1">
                        <div class = "search-bar">
                            <input type = "text" class = "searchterm" placeholder = "Search...">
                            <button type = "submit" class = "searchbutton">
                                <i class = "isearch"></i>
                            </button>
                        </div>

</div>
                    </div>
                </div>
            
            
        
            <div class = "thirdcolumnempty">
            </div>

            
        </div>
        </div>
    


    </header>
    <br><br><br><br>

    <div class = "maincolumns">


        <div class = "firstcolumn">

            <div class = "linkscolumn" >

                <div class = "recommandations">
                    <h4>Recommandations</h3>
                    <a href = "recommandations.php">Recommendations</a>
                </div>
                <div class = "recommandations">
                    <h4>Recommandations</h3>
                    <a href = "recommandations.php">Recommendations</a>
                </div>
                <div class = "recommandations">
                    <h4>Recommandations</h3>
                    <a href = "recommandations.php">Recommendations</a>
                </div>
                <div class = "recommandations">
                    <h4>Recommandations</h3>
                    <a href = "recommandations.php">Recommendations</a>
                </div>
        </div>
        

               <!-- SLIDESHOW -->
               
            <div class = "secondcolumn">
                <div class ="scndcolmcontent">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
    
                        <img src="slideshow1/minecraft.jpg" style="width:50%" >
                        <!--<div class="text">Caption Text</div>-->
                        </div>

                        <div class="mySlides fade">
    
                        <img src="slideshow1/undertale.jpg" style="width:50%">
                            <!--<div class="text">Caption Two</div>-->
                        </div>

                        <div class="mySlides fade">
    
                        <img src="slideshow1/stardewvalley.jpeg" style="width:50%">
                            <!--<div class="text">Caption Three</div>-->
                            </div>

                    </div>
                </div>
                <br>

                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                </div>

                <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 10000); // Change image every 2 seconds
                }
                </script>
            </div>
<br>
            <div class = "thirdcolumn" >
                .
                .
                .
            </div>
    
    </div>


</div><br><br><br>





<div class = "secondmaindiv">

    <div class = "firstcolumn1">

    </div>

    <div class = "secondcolumn2">

                    <div class="slideshow-container">

                        <div class="mySlides fade">
    
                        <img src="slideshow1/minecraft.jpg" style="width:20%" >
                        <!--<div class="text">Caption Text</div>-->
                        </div>

                        <div class="mySlides fade">
    
                        <img src="slideshow1/undertale.jpg" style="width:20%">
                            <!--<div class="text">Caption Two</div>-->
                        </div>

                        <div class="mySlides fade">
    
                        <img src="slideshow1/stardewvalley.jpeg" style="width:20%">
                            <!--<div class="text">Caption Three</div>-->
                            </div>

                    </div>
                </div>
                <br>

                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                </div>

                <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 10000); // Change image every 2 seconds
                }
                </script>
            </div>
    </div>

    <div clas = "thirdcolumn3">
        
    </div>

</div>













</body>
</html>