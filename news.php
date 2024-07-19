<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforstore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



    <style>

        /* Slideshow */
.carousel {
            position: relative;
            width: 75%;
            height: 80vh;
            overflow: hidden;
            border-radius: 15px;
        }
        .carousel-slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
        }
        .carousel-slide.active {
            display: flex;
        }
        .carousel-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: blur(20px);
            z-index: 1;
        }
        .carousel-content {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
        }
        .carousel-image {
            max-height: 90%; 
            max-width: 50%; 
            object-fit: contain;
            cursor: pointer;
            margin-right: 10px; 
        }
        .carousel-caption {
            text-align: left;
            color: white; 
        }
        .carousel-caption h3 {
            font-size: 2rem;
            margin: 0;
        }
        .carousel-caption p {
            font-size: 1.5rem;
            margin: 0;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.5); 
            color: black; 
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 3;
        }
        .carousel-control-prev {
            left: 10px;
        }
        .carousel-control-next {
            right: 10px;
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
            
            
        
                    <div class = "thirdcolumnempty">
                        <img src="gifs/gif4.gif" style="width:25%">
                    </div>

                        
                
           
            </div>
        </div>
    


    </header>
    <br><br><br><br>



    <div class = "emptycolumn">
        
    </div>

    <!-- <div class = "mainpart"> -->
        
                        

    <div class = "emptycolumn">
    </div>

  

<!-- Slideshow -->

<center>


<div class="carousel" id="gameCarousel">
    <?php
    include("connectiondb.php");
    $query = "SELECT id_game, name_game, price, image FROM games";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $first = true;
        while($row = $result->fetch_assoc()) {
            $imageData = base64_encode($row['image']);
            $activeClass = $first ? 'active' : '';
            $first = false;
            echo '<div class="carousel-slide ' . $activeClass . '">';
            echo '<div class="carousel-background" style="background-image: url(\'data:image/jpeg;base64,' . $imageData . '\');"></div>';
            echo '<div class="carousel-content">';
            echo '<a href="store-game-page.php?id_game=' . $row['id_game'] . '">';
            echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="' . $row['name_game'] . ' Image" class="carousel-image">';
            echo '</a>';
            echo '<div class="carousel-caption">';
            echo '<h3>' . $row['name_game'] . '</h3>';
            echo '<p>$' . $row['price'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    <button class="carousel-control carousel-control-prev" onclick="prevSlide()">&#10094;</button>
    <button class="carousel-control carousel-control-next" onclick="nextSlide()">&#10095;</button>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 3000); 
</script>

</center>
     

<br><br><br>

   

           
       
   
</body>
</html>