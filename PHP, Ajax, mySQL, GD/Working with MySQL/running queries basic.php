<?php

require 'connect.inc.php';

$query= "SELECT food,calories FROM food WHERE `healthy/unhealthy`='h'"; //notice the difference, apostrophies and quot.marks
$result= mysqli_query($conn,$query); //returns mysqli_result object

while($row= mysqli_fetch_assoc($result))	//interprets result to an associative array for 1 row (see also: mysqli_fetch_array() )
	echo $row['food'].' '.$row['calories'].'<br>';
$num_rows= mysqli_num_rows($result);
echo $num_rows.' results found.<br>';

?>