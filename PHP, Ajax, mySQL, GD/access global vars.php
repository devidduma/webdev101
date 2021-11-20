<?php

$user_ip= gethostbyname($_SERVER['SERVER_NAME']);

function echo_ip() {
	global $user_ip;
	echo "Your IP address is $user_ip";
}

echo_ip();

?>