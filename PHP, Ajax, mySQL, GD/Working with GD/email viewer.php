<html>
<form action="email viewer.php" method="GET"> <!-- OR: action="jpeg email generator.php" -->
Specify the ID of the desired user: <input type="text" name="id" />
<input type="submit" value="OK" />
</form>
<?php
$conn= mysqli_connect('localhost','root','','my_own_database');
if(isset($_GET['id'])&&!empty($_GET['id'])) {
	$id= mysqli_real_escape_string($conn,$_GET['id']);
	echo '<img src="jpeg email generator.php?id='.$id.'" />';
}
?>
</html>