<?php

session_start();

if(!isset($_POST['secure']))
	$_SESSION['secure']= rand(1000,9999);	//if it is set, then don't change the value
else {
	if($_SESSION['secure']==$_POST['secure'])
		echo 'A match!<br>'; //then go to another page
	else {
		echo 'Incorrect. Try again.';
		$_SESSION['secure']= rand(1000,9999);
		}
}

?>

<img src="Captcha generate.php" />
<form action="Captcha view.php" method="POST">
Type the value you see: <input type="text" size="6" name="secure" />
<input type="submit" value="OK" />
</form>