<?php

require 'connect.inc.php';

$result_set= $conn->query("SELECT * FROM people");

echo '<br>Current field cursor is on '.$result_set->current_field.'<br>'; //shows the index of the field to which the cursor is pointing
$result_set->field_seek(1);	//sets the cursor over the 2nd field
$object= $result_set->fetch_field(); //fetches 2nd field
print_r($object);
echo '<br>';
echo 'Current field cursor is on '.$result_set->current_field.'<br><br>'; //you can see that cursor has been incremented by 1

$object= $result_set->fetch_row(); //fetches a row
print_r($object);
echo '<br><br>';

$result_set->field_seek(0);
$object= $result_set->fetch_field();
print_r($object);
echo '<br><br>';

$result_set->data_seek(3);	//+1 because 1 row was fetched before, +3 => +4
$object= $result_set->fetch_row();
print_r($object);

?>