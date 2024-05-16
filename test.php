<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slideshow</title>
    <style>
        #slideshow-container {
            max-width: 800px;
            position: relative;
            margin: auto;
            text-align: center; /* Center the images */
            
        }

        .slide {
            display: none;
        }

        img {
            max-width: 50%; /* Set maximum width to 100% */
            height: auto;
            border: 1px solid #ddd; /* Add a border for better visibility */
            border-radius: 5px; /* Optional: Add border radius for a rounded look */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        .arrow {
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="slideshow-container">
    <?php
    include("connectiondb.php"); // Include your database connection file

    // Fetch the first 4 games from the database
    $sql = "SELECT * FROM games LIMIT 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $games = $result->fetch_all(MYSQLI_ASSOC);

        foreach ($games as $index => $game) {
            echo '<div class="slide" id="slide' . $index . '">';
            echo '<a href="store-game-page.php?id_game=' . $game['id_game'] . '"><img src="data:image/jpeg;base64,' . base64_encode($game['image']) . '" alt="' . $game['name_game'] . '"></a>';
            echo '</div>';
        }
    }
    ?>
</div>

<div class="button-container">
    <span class="arrow" onclick="previousSlide()">&#9664;</span>
    <span class="arrow" onclick="nextSlide()">&#9654;</span>
</div>

<script>
    var currentSlideIndex = 0;
    var slides = document.getElementsByClassName("slide");

    showSlide(currentSlideIndex);

    function showSlide(index) {
        if (index < 0) {
            currentSlideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            currentSlideIndex = 0;
        } else {
            currentSlideIndex = index;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[currentSlideIndex].style.display = "block";
    }

    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    function previousSlide() {
        showSlide(currentSlideIndex - 1);
    }

    setInterval(nextSlide, 3000); // Automatic transition every 2 seconds
</script>

</body>
</html>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slideshow</title>
    <style>
        #slideshow-container {
            max-width: 800px;
            position: relative;
            margin: auto;
            text-align: center; /* Center the images */
            overflow: hidden; /* Hide overflow to prevent extra space */
        }

        .slide {
            display: none;
            position: absolute;
            width: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out; /* Add transition for opacity */
        }

        .slide.active {
            display: block;
            opacity: 1;
        }

        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        .arrow {
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="slideshow-container">
    <?php
    include("connectiondb.php");

    $sql = "SELECT * FROM games LIMIT 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $games = $result->fetch_all(MYSQLI_ASSOC);

        foreach ($games as $index => $game) {
            echo '<div class="slide" id="slide' . $index . '">';
            echo '<a href="store-game-page.php?id_game=' . $game['id_game'] . '"><img src="data:image/jpeg;base64,' . base64_encode($game['image']) . '" alt="' . $game['name_game'] . '"></a>';
            echo '</div>';
        }
    }
    ?>
</div>

<div class="button-container">
    <span class="arrow" onclick="previousSlide()">&#9664;</span>
    <span class="arrow" onclick="nextSlide()">&#9654;</span>
</div>

<script>
    var currentSlideIndex = 0;
    var slides = document.getElementsByClassName("slide");

    showSlide(currentSlideIndex);

    function showSlide(index) {
        if (index < 0) {
            currentSlideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            currentSlideIndex = 0;
        } else {
            currentSlideIndex = index;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }

        slides[currentSlideIndex].classList.add("active");
    }

    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    function previousSlide() {
        showSlide(currentSlideIndex - 1);
    }

    setInterval(nextSlide, 2000); // Automatic transition every 2 seconds
</script>

</body>
</html>
