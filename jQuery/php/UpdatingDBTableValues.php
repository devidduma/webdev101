<?php
session_start();
$_SESSION['id']= '1';	//now, i am just forcing its value.

$conn= mysqli_connect('localhost','root','','jquery');

if(isset($_POST['name'])) {
	$name= mysqli_real_escape_string($conn,htmlentities($_POST['name']));
	$query= "UPDATE users SET name='$name' WHERE id=".$_SESSION['id'];	//name=$name is erraneous. name='$name' is correct.
	$update= mysqli_query($conn,$query);
	
	if($update) echo 'Settings have been updated.';
	else echo 'An error occurred while updating your settings.';
}

?>