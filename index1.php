<form method="post">
	<input type="textbox" name="str" required/>
	<input type="submit" name="submit" value="Search"/>
</form>

<?php
include('db.php');
if(isset($_POST['submit'])){
	$str=mysqli_real_escape_string($con,$_POST['str']);
	$sql="select id_game, name_game, genre, price,'games' from gamestore 
	// where title 
	// like '%$str%' or details like '%$str%'
	// UNION
	// select id, content as title, details,'page' from page where content 
	// like '%$str%' or content like '%$str%'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo "<a href='details.php?id=".$row['id_game']."&t=".$row['name_game']."'>".$row['name-game']."</a>";
			echo "<br/>";
		}
	}else{
		echo "No data found";
	}
}
?>