<?php

require 'connect.inc.php';

if(isset($_POST['username'])&&isset($_POST['password'])) {
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	if(!empty($username)&&!empty($password)) {
		echo $username.'<br>'.$password.'<br>';
		$query="SELECT id FROM users WHERE username='$username' AND password='$password'";
		$result= mysqli_query($conn,$query);
		if(mysqli_num_rows($result)) echo 'Logged in!<br>';
		else echo 'Invalid username/password combination!<br>';
	} else echo 'Please fill in all fields.<br>';
}	

?>

<br><span>Notice: I am using the `users` table in `my_own_database` which has got hashed passwords. So, just SQL injection will do the trick to login.</span><br>
<form action="SQL injection.php" method="POST">
Username: <input type="text" name="username"/>
Password: <input type="text" name="password"/>
<input type="submit" value="Submit"/>
</form>

<!--
Alex citation:
There are three different ways to protect against SQL injection.
1) By escaping single quotation marks in php.ini (by using 'magic quotes') REMOVED IN PHP 5.4 <-- Bad practise
2) mysql_real_escape_string() <-- Good Practise
3) by using the right comparison at mysqli_num_rows()
-->