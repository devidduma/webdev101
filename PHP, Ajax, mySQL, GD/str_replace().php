<?php

$string= 'Hello my sweet fucking world!';
echo str_replace('fucking', '',$string) .'</br>';

//--- multi substituting
$find= array('my', '!', 'Hello');
echo str_replace($find, '', $string) .'</br>';

//--- multi-multi substituting
$replace= array('MY', '.', 'HELLO');
echo str_replace($find, $replace, $string);

?>