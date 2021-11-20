<?php ob_start(); ?>

<h1>My Page</h1>


<?php

if(false) header('Location: http://google.com');

ob_flush();
ob_end_clean();
?>