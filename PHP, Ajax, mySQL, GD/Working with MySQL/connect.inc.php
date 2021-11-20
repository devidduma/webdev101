<?php

$mysql_host= 'localhost';
$mysql_user= 'root';
$mysql_pass= '';

/*
//----old version:-----

@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect!');
echo 'Connected!';

mysql_select_db('my_own_database') or die('Could not connect!');
echo 'Connected!';
*/

$conn= mysqli_connect($mysql_host,$mysql_user,$mysql_pass,'my_own_database') or die('Could not connect!');
echo 'Connected!<br>';
//change db: mysqli_select_db('new_db', $conn);


/*

The mysql_select_db() function sets the active MySQL database.
This function returns TRUE on success, or FALSE on failure.
mysql_select_db(database,connection); (connection optional)

The mysqli_select_db() function is used to change the default database for the connection.
mysqli_select_db(connection,dbname); (connection required)

*/
?>
