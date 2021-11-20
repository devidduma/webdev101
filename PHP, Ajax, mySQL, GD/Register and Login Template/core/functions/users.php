<?php
function user_exists($username) {
	global $conn;
	
	$username=sanitize($username);
	$query="SELECT COUNT(id) FROM `users` WHERE username= '$username'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	return ($row[0]==1)?true:false;
}

function user_active($username) {
	global $conn;
	
	$username=sanitize($username);
	$query="SELECT COUNT(id) FROM `users` WHERE username= '$username' AND active=1";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	return ($row[0]==1)?true:false;
}
?>