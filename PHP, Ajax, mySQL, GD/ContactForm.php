<?php

if(isset($_POST['name'],$_POST['email'],$_POST['text'])) {
	$name= $_POST['name'];
	$email= $_POST['email'];
	$text= $_POST['text'];
	
	if(!empty($name) && !empty($email) && !empty($text)) {
		$to= 'devidd05@gmail.com';
		$subject= 'Hello';
		$text= $name."\n".$text;
		$headers= "From: $email";
		
		//even though maxlength has been put in html, you should check in php also because of cheats
		
		if(@mail($to,$subject,$text,$headers)) echo 'Thanks for contacting us!<br><hr><br>';
		else echo 'Sorry an error occurred! Please try again later.<br><hr><br>';
		
	}
	else echo 'You should fill in all fields!<br><hr><br>';
	
}

?>

<form action="ContactForm.php" method="POST">
	Name:<br><input type="text" name="name" maxlength="25"/><br><br>
	eMail Address:<br><input type="text" name="email" maxlength="50"/><br><br>
	Message:<br>
	<textarea name="text" rows="7" cols="30" maxlength="1000"></textarea>
	<br><br>
	<input type="submit" value="Send" />
</form>