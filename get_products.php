<?php
include("connectiondb.php");


$priceMin = $_GET['priceMin'];
$priceMax = $_GET['priceMax'];
$sortOrder = $_GET['sortOrder'];

if ($sortOrder == 'asc') {
    $orderBy = 'price ASC';
} elseif ($sortOrder == 'desc') {
    $orderBy = 'price DESC';
} elseif ($sortOrder == 'nameAsc') {
    $orderBy = 'name_game ASC';
} elseif ($sortOrder == 'nameDesc') {
    $orderBy = 'name_game DESC';
} else {
    $orderBy = 'name_game ASC'; 
}

$sql = "SELECT id_game, name_game, price FROM games WHERE price BETWEEN $priceMin AND $priceMax ORDER BY $orderBy";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo '<div class="product">';
        echo '<h3>' . $row['name_game'] . '</h3>';
        echo '<p>Preț: $' . $row['price'] . '</p>';
        
        echo '</div>';
    }
} else {
    echo "<p>Nu s-au găsit produse conform criteriilor selectate.</p>";
}

$conn->close();
?>
