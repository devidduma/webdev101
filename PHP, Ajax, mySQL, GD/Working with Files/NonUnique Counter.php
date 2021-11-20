<?php

function hit_count() {

	$handle= fopen('nonunique_count.txt','r');
	$current= fread($handle, filesize('nonunique_count.txt'));
	fclose($handle);
	
	$handle= fopen('nonunique_count.txt','w');
	fwrite($handle, ++$current);
	fclose($handle);
	
	echo $current;
}

hit_count();


?>