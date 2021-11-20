<?php

require 'connect.inc.php';

if(isset($_POST['name']))	{
	$name= $_POST['name'];
	
	if(!empty($name)) {
		$query= 'SELECT name FROM people WHERE name LIKE "%'.mysqli_real_escape_string($conn,$name).'%"';
		$result= mysqli_query($conn,$query);
		while($row= mysqli_fetch_array($result))
			echo $row[0]."<br>";
		if(mysqli_num_rows($result)==0) echo 'No results found.';
	}
	else echo 'Please fill in a name!<br>';
}

?>

<form action="LIKE with SearchEngine.php" method="POST">
	Name: <input type="text" name="name" />
	<input type="submit" value="Search" />
</form>