<?php

$conn= mysqli_connect('localhost','root','','my_own_database');

if(isset($_POST['text'])) {
	$text= $_POST['text'];
	if(!empty($text)) {
		$query= "INSERT INTO data VALUES('','".mysqli_real_escape_string($conn,$text)."')";
		if($result= mysqli_query($conn,$query)) echo 'OK.';
		else echo 'Couldn\'t send data to database. Please try again later.';
	}
	else echo 'Please type something.';
}

?>