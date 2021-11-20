<?php

//preg_match()
$string= 'This is a string';

if(preg_match('/is/',$string)) echo 'Match found.</br>';
else echo 'Match not found.';


//let's create a function

function has_space($string) {
	if(preg_match('/ /', $string)) return true;
	else return false;
}

$string= 'Idonthaveanyspace';
if(has_space($string)) echo 'Has a space.';
else echo 'Has no spaces.';

?>