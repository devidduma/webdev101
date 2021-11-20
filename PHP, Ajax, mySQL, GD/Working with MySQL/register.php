<?php

require 'core.inc.php';
require 'connect.inc.php';

if(!loggedin()) {

if(isset($_POST['username'],$_POST['password'],$_POST['password_again'],$_POST['firstname'],$_POST['surname'])) {
	$username= $_POST['username'];
	$password= $_POST['password'];
	$password_again= $_POST['password_again'];
	$firstname= $_POST['firstname'];
	$surname= $_POST['surname'];
	
	if(!(empty($username)||empty($password)||empty($password_again)||empty($firstname)||empty($surname))) {
	//doing it like this just for fun, the straightway around is by using &&!empty() for each.
		if(strlen($username)<=30&&strlen($firstname)<=30&&strlen($surname)<=30) {
			if($password==$password_again) {
				$query= "SELECT username FROM users WHERE username= '$username'";
				$result= mysqli_query($conn,$query);
				if(mysqli_num_rows($result)!=0)
					echo 'The username \''.$username.'\' already exists!';
				else {
					$password= sha1($password);	//the password is now a hash
					$query= "INSERT INTO users VALUES('','".mysqli_real_escape_string($conn,$username)."','".mysqli_real_escape_string($conn,$password)."',
													'".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$surname)."')";
													//notice that the first value for ID is left empty.
					//i am doing it with real_escape_string for now, just like Alex, but remember that facebook doesn't allow users to enter nothing except letters.
					if($result= mysqli_query($conn,$query))
						header('Location: register_success.php');	//REGISTERED SUCCESSFULLY!!!
					else echo 'Sorry, we couldn\'t register you now. Please try again later!';
				}
			} else echo 'Passwords do not match!';
		} else echo 'You have surpassed the limit of characters for the fields. You sneaky bastard!';
	} else echo 'Please fill in all fields.';

}

?>

<form action="register.php" method="POST">
	Username: <br><input type="text" name="username" maxlength="30" value="<?php if(isset($_POST['username'])) echo $username; ?>"/><br><br>
	Password: <br><input type="password" name="password"/><br><br>
	Confirm Password: <br><input type="password" name="password_again"/><br><br>
	Firstname: <br><input type="text" name="firstname" maxlength="40" value="<?php if(isset($_POST['firstname'])) echo $firstname; ?>"/><br><br>
	Surname: <br><input type="text" name="surname" maxlength="40" value="<?php if(isset($_POST['surname'])) echo $surname; ?>"/><br><br>
	<input type="submit" value="Register" />
</form>

<?php
}
else echo 'You already have an account!<br>';

?>