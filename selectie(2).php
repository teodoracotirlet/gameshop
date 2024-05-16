<!DOCTYPE html>
<html>
<body>

<?php
//database connection 'clienti'
$servername = "localhost";
$username = "";
$password = "";
$dbname = "inf eco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from clienti WHERE nume='".$_POST["firstname"]."' and prenume='".$_POST["lastname"]."'";
echo $sql."<br>";

//$sql="SELECT * from clienti WHERE id_client=2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID CLIENT: ".$row["id_client"]."<br>";
		echo "NUME CLIENT:".$row["nume"]."<br>";
	    echo "PRENUME CLIENT:".$row["prenume"]."<br>";
		echo "Email:".$row["email"]."<br>";
		echo "Varsta:".$row["varsta"]."<br>";
    }
} else {
    echo "Nu exista clientul cu acest nume!";
}
$conn->close();

?>

</body>
</html>