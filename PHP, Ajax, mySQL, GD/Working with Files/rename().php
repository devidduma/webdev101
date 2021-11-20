<?php

$filename= 'filetorename.txt';

if( @rename($filename, rand(100000,999999).$filename) )
	echo 'The file <strong>'.$filename.'</strong> has been renamed.';
else
	echo 'File does not exist!';

?>