<?php
session_start();

if(isset($_SESSION['name']))
	echo 'Welcome '.$_SESSION['name'].'. You are '.$_SESSION['age'].' years old.';
else echo 'Please LOGIN';

?>