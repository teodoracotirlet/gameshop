<!DOCTYPE html>
<html>
<body>



<?php

$nameErr=$firstname="";
if (empty($_POST["first_name"])) {
    $nameErr = "Introduce your name!";
  } else {
    $firstname = $_POST["first_name"];
  }
?>

Order Details  <?php echo $firstname.$nameErr; ?><br>
: <?php echo $_POST["last_name"]; ?>

<?php
//database connection 'orders'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamestore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$games=$_POST['games'];

$sql = "INSERT INTO orders ( first_name, last_name,email,address, city, state, games)
VALUES ('$first_name', '$last_name', '$email','$address', '$city', '$state', '$games')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>