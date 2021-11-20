<?php

require 'connect.inc.php';

$user_ip= $_SERVER['REMOTE_ADDR'];

function ip_exists($ip) {
	global $user_ip,$conn;
	$query= "SELECT ip FROM hits_ip WHERE ip='$user_ip'";
	
	$result= $conn->query($query);
	if(@mysqli_num_rows($result)) return true;
	else return false;
}

function ip_add($ip) {
	global $conn;
	$query= "INSERT INTO hits_ip VALUES('$ip')";
	$conn->query($query);
}

function update_count() {	//object oriented style
	global $conn;
	
	$query= "SELECT count FROM hits_count";
	if(@ $result= $conn->query($query)) {
		$row= $result->fetch_assoc();	//fetch_row() returns as enumerated array
		$count= $row['count']+1;
		
		$query= "UPDATE hits_count SET count= '$count'";
		$result= $conn->query($query);
	}
}


if(ip_exists($user_ip)) echo 'IP already exists. No incrementation applied.<br>';
else {
	echo 'IP does not exist in the database. \'count\' incremented and IP saved.<br>';
	update_count();
	ip_add($user_ip);
	}
?>