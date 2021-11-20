<?php

if(isset($_GET['username'])&&!empty($_GET['username'])) {
	$username= $_GET['username'];
	echo "Hello $username </br>";
	
	if(strtolower($username)=='devid') echo 'You are the best!</br>';
}

?>

<html>
<head>

</head>
<body>

<form action="php_html_stuff.php" method="GET">
Name: <input type="text" name="username"></br>
	  <input type="submit" value="Submit">
</form>

</body>
</html>