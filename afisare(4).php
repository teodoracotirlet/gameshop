<!DOCTYPE html>
<html>
<body>

<h1>Datele introduse in formular:</h1>

<?php

$nameErr=$firstname="";
if (empty($_POST["firstname"])) {
    $nameErr = "Introduceti numele!";
  } else {
    $firstname = $_POST["firstname"];
  }
?>

Nume:  <?php echo $firstname.$nameErr; ?><br>
Prenume: <?php echo $_POST["lastname"]; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inf eco";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$varsta=$_POST['varsta'];

$sql = "INSERT INTO clienti ( nume, prenume,email,varsta)
VALUES ('$firstname', '$lastname', '$email','$varsta')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>