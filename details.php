<?php
include('db.php');
if(isset($_GET['id_game']) && $_GET['id_game'] > 0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id_game']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="games"){
        $sql="select id_game, name_game, genre from games where id_game='$id_game'";
    // }elseif($t=="page"){
    //     $sql="select id, content as title, details from page where id='$id'";
    }else{
        header('location:index1.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        echo "<h2>".$row['name_game']."</h2>";
        echo "<p>".$row['genre']."</p>";
        echo "<a href='index1.php'>Back</a>";
    }else{
        header('location:index1.php');
        die();
    }
}
?>