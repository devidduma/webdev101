<?php

if(isset($_POST['email'])) {
	$email= $_POST['email'];
	if(!empty($email)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) echo 'This is a valid email address!';
		else echo 'This is not a valid email address!';
	}
}

?>