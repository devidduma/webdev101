<?php

$filename= 'file.txt';

if(file_exists($filename)) echo 'File already exists!';
else {
	$handle= fopen($filename, 'w');
	fwrite($handle, 'Hey Mr.DJ Mathafaka');
	fclose($handle);
	}

?>