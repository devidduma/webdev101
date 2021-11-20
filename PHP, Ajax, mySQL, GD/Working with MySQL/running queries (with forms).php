<?php
require 'connect.inc.php';
?>

<form action="" method="GET">
	<span>Choose a food type:</span>
	
	<select name="uh">
		<option value="u">Uhealthy</option>
		<option value="h">Healthy</option>
	</select><br>
	
	<input type="submit" value="Submit" />
</form>

<?php

if(isset($_GET['uh'])&&!empty($_GET['uh'])) {

	$uh=strtolower($_GET['uh']);	//for security purposes
	if(!($uh=='u' || $uh=='h')) die('Wrong value inputed. Only \'h\' or \'u\' allowed.<br>');
	
	$query= "SELECT food,calories FROM food WHERE `healthy/unhealthy`='$uh'"; //'$uh'
	$result= mysqli_query($conn,$query); //returns mysqli_result object

	while($row= mysqli_fetch_assoc($result))	//interprets result to an associative array for 1 row (see also: mysqli_fetch_array() )
		echo $row['food'].' '.$row['calories'].'<br>';
	$num_rows= mysqli_num_rows($result);
	echo $num_rows.' results found.<br>';

}

?>