<?php

$handle= fopen('names.txt','w'); //'w' 'r' 'a'
fwrite($handle, "Devid\nBilly");
fclose($handle);

?>