<?php

$string= 'HELLO MY FUCKING DEAR WORLD.';

$str_word_count= str_word_count($string,0,'.&!*');	//returns a value
echo $str_word_count.'</br>';

$str_word_count= str_word_count($string,1,'.&!*');	//returns an array
print_r ($str_word_count); //prints elements of arrays
echo '</br>';

$str_word_count= str_word_count($string,2,'.&!*'); //returns a different kind of array
print_r ($str_word_count); //prints elements of arrays



$str_shuffle= str_shuffle($string);
echo "</br>$str_shuffle";

/*
strlen()
strrev()
substr()
str_shuffle()
str_word_count()
similar_text(str1,str2,res)
trim()	rtrim()	ltrim()
addslashes()
stripslashes()
preg_match()
strtolower()
strtoupper()
strpos()
str_replace()
substr_replace()
*/
?>