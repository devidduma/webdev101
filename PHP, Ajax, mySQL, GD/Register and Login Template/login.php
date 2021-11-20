<?php
include 'core/init.php';

if(!empty($_POST)) {
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	if(!empty($username)&&!empty($password)) {
		if(user_exists($username)) {
			if(user_active($username)) {
			
			}else $errors[]='You haven\'t activated your account!';
		}else $errors[]='Username does not exist!';
	}else $errors[]='You need to enter a username and password.';
}
print_r($errors);
?>