<?php

$user_input_new= null;
$user_input=null;
$find=null;
$replace=null;

if(isset($_POST['user_input'])&&!empty($_POST['user_input']))
	$user_input= $_POST['user_input'];
if(isset($_POST['find'])&&!empty($_POST['find']))
$find= $_POST['find'];
if(isset($_POST['replace'])&&!empty($_POST['replace']))
$replace=$_POST['replace'];

$user_input_new= str_replace($find,$replace,$user_input);
?>

<hr>

<form action="FindReplace.php" method="POST">

<textarea rows="7" cols="30" name="user_input"><?php echo $user_input_new; ?></textarea><br>
Search for: <br><input type="text" name="find"><br>
Replace with: <br><input type="text" name="replace"><br>

<input type="submit" value="Replace">
</form>