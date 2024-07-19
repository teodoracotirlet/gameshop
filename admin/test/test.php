<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<!DOCTYPE html>

<html>
<head>


    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>


<div class="slideshow-container">
<div class="slideshow-inner">
  <div class="mySlides fade">

    <img  src='./assets/img/web-crab-compressed.jpg' style='width: 100%;' alt="sally lightfoot crab"/>
    <div class="text">Sally Lightfoot Crab</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-fighting-nazcas.jpg' style='width: 100%;' alt="fighting nazca boobies"/>
    <div class="text">A scuffle between two Nazca Boobies</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-otovalo-waterfall.jpg' style='width: 100%;' alt="otovalo waterfall"/>
    <div class="text">A waterfall discovered on a hike in Otovalo</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-pelican.jpg' style='width: 100%;' alt="pelican"/>
    <div class="text">Pelican</div>
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
  <span class="dot" onclick='currentSlide(4)'></span>
</div>

</div>

<h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 





</body>
</html>