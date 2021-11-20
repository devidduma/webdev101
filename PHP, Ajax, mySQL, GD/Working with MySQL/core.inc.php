<?php

ob_start();
session_start();

$current_file= $_SERVER['SCRIPT_NAME'];		//where we are
if(isset($_SERVER['HTTP_REFERER']))
	$http_referer= $_SERVER['HTTP_REFERER'];	//where we came from
	//note that if you dont perform the if statement it produces errors like this:
	//Notice: Undefined index: HTTP_REFERER in C:\xampp\htdocs\tutorials\Working with MySQL\core.inc.php on line 7

function loggedin() {
	if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ) return true ;
	else return false;
}

function GetUserField($field) {
	global $conn;
	$query= "SELECT $field FROM users WHERE id= ".$_SESSION['user_id'];
	if( $result_set= $conn->query($query) ){
		$row= mysqli_fetch_row($result_set);
		return $row[0];
		}
	
}

?>