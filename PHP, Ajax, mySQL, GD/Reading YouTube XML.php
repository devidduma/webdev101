<?php

$video= simplexml_load_file('http://gdata.youtube.com/feeds/api/videos/msCY6evKpNI');

echo '<b>Title:</b><br>'.$video->title.'<br>';
echo '<b>Description:</b><br>'.$video->content.'<br>';

?>