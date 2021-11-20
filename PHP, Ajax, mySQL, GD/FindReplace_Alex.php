<?php

if(isset($_POST['user_input'],$_POST['search'],$_POST['replace'])) {
	$text= $_POST['user_input'];
	$search= $_POST['search'];
	$replace= $_POST['replace'];
	$search_len=strlen($search);
	
	$offset= 0;
	if(!empty($text)&&!empty($search)&&!empty($replace))
	while(( $strpos= strpos($text,$search,$offset) ) !== false) {
		$offset= $strpos+$search_len;
		$text= substr_replace($text,$replace,$strpos,$search_len);
		}
	
	echo $text;

}

?>

<form action="FindReplace_Alex.php" method="POST">
<textarea name="user_input" rows="6" cols="30"></textarea><br><br>
Search for: <br><input name="search" type="text"><br><br>
Replace with: <br><input name="replace" type="text"><br><br>
<input type="submit" value="Replace">
</form>