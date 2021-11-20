<?php

require 'connect.inc.php';
require 'core.inc.php';

if(loggedin()) {
	echo 'You are logged in as '.$_SESSION['user_id']. '. <a href="LOGOUT users.php">Logout</a><br>';
	$firstname= GetUserField('firstname');
	$surname= GetUserField('surname');
	echo 'How have you been doing '.$firstname.' '.$surname.'?<br>';
}
else include 'loginform.inc.php';

?>