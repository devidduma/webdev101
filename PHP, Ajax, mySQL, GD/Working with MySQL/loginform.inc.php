<?php

if(isset($_POST['username'])&&isset($_POST['password'])) {
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	if(!empty($username)&&!empty($password)) {
		$query= "SELECT id FROM users WHERE username='".mysqli_real_escape_string($conn,$username)."' AND password='".sha1($password)."'";
		$result= mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result)==0) echo 'Invalid username or password.';
		else if(mysqli_num_rows($result)==1) {
			$row= mysqli_fetch_row($result);
			$_SESSION['user_id']= $row[0];
			header("Location: $current_file"); //used to redirect
		}
	}
	else echo 'Empty username or password.';
}

?>

<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type="text" name="username" />
Password: <input type="password" name="password" />
<input type="Submit" value="Login" />
</form>