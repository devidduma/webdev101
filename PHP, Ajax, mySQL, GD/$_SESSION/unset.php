<?php
session_start();

unset($_SESSION['name']); //unsets only 'name'
session_destroy(); //unsets all the variables

?>