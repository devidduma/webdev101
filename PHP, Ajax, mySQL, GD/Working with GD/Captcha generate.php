<?php

session_start();
header('Content-type: image/jpeg');

$text= $_SESSION['secure'];
$font_size= 30;

$image_height= 80;
$image_width= 170;
$image= ImageCreate($image_width,$image_height);
ImageColorAllocate($image,255,255,255);	//RGB values
$text_color= ImageColorAllocate($image,25,85,135);

for($x=1;$x<50;$x++) {
	$x1= rand(1,170);
	$y1= rand(1,170);
	$x2= rand(1,170);
	$y2= rand(1,170);
	ImageLine($image,$x1,$y1,$x2,$y2,$text_color);
}

imageTTFtext($image,$font_size,0,20,$image_height-15,$text_color,'Mad Beef.ttf',$text);
ImageJPEG($image);

?>