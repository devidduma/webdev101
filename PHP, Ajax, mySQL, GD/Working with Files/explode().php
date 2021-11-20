<?php

$handle= fopen('names2.txt', 'r');
$datain= fread($handle, filesize('names2.txt')); //length is optional, if not specified, it reads until eof

$names_array= explode(',', $datain);
foreach($names_array as $name) {
	echo $name.'<br>';
}
//implode() is the opposite of this: writes elements of an array in a string
?>