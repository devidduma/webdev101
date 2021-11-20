<?php

$xml= simplexml_load_file('example.xml');

foreach($xml->producer as $producer) {
	echo $producer->name.' ('.$producer->age.')<br>'; //for the name and age
	foreach($producer->show as $show)
		echo $show->showname.' (set on '.$show->showdate.')<br>';
	echo '<br>';
}

?>