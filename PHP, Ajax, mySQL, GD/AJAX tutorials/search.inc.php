<?php

if(isset($_GET['search_text']))
	$search_text= $_GET['search_text'];

if(!empty($search_text)) {
	if($conn= @mysqli_connect('localhost','root','','my_own_database')) {
		$query= "SELECT name FROM people WHERE name LIKE '".mysqli_real_escape_string($conn,$search_text)."%'";
		$result= mysqli_query($conn,$query);
		while($row= mysqli_fetch_assoc($result))
			echo $row['name'].'<br>';
	}
}

?>