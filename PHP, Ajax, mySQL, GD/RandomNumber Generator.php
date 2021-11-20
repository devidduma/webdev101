<?php

$max= getrandmax();
echo "The max number that can be generated is $max <br><hr><br>";

if(isset($_POST['roll'])) {
	echo rand(1,6);
}
	


?>

<form action="RandomNumber Generator.php" method="POST">
	<input type="submit" name="roll" value="Roll Dices">
</form>