<?php
/*
->getMessage();
->getLine();
->getFile();
*/

$age=18;

try {
	if($age>=18) echo 'Old enough.';
	else throw new Exception('Not old enough!');
}
catch(Exception $ex) {
	echo 'ERROR: '.$ex->getMessage();
}

?>