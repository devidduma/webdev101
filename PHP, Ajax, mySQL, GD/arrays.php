<?php

$array= array('pasta', 'salad', 'pizza');
print_r($array);

$array[3]= 'Devid'; //notice how easy is to add new elements
//you can also assign a new value to $array[10] because 10 is just a key, it doesnt require to make it of length 10.
print_r($array);

//---------------- Associative Arrays ------------------------------
$a_array= array('pasta'=>500, 'salad'=>100, 'pizza'=>1000);
print_r($a_array);

?>