<?php

$directory= 'files/';

if ( $handle= opendir($directory) ) {
	echo 'Looking inside: '.$directory.'<br>';
	while($file= readdir($handle))
		echo '<a href="'.$directory.$file.'">'.$file.'</a><br>';
}

?>