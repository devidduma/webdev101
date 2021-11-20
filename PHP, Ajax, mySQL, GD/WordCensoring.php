<?php

$user_input= null; //define in order not to give an error

$find= array('devid','billy','dale');
$replace= array('d***d','b***y','d**e');

if(isset($_POST['user_input']) && !empty($_POST['user_input'])) {
	$user_input= $_POST['user_input'];
	$user_input_new= str_ireplace($find,$replace,$user_input); //create a new variable in order not to censor inside the textarea
	echo $user_input_new;
}
?>

<hr>

<form action="WordCensoring.php" method="POST">
<textarea name="user_input" rows="7" cols="30"><?php echo $user_input; ?></textarea><br><br>
<input type="submit" Value="Submit">
</form>