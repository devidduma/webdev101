<?php

$filename= 'filetodelete.txt';

if(@unlink($filename)) {	//the @ char makes Warning not appear
	echo 'The file <em>\''.$filename.'\'</em> has been successfully deleted!';
}
else
	echo 'The file <em>\''.$filename.'\'</em> does not exist!';

?>