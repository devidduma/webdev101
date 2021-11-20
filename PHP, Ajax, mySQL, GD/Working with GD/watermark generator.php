<?php

header('Content-type: image/jpeg');

if(isset($_GET['source'])) {
	$source= $_GET['source'];
	
	$wm= ImageCreateFromJPEG('logo.jpg');	//wm means watermark
	$wm_width= imagesx($wm);
	$wm_height= imagesy($wm);
	
	$image= ImageCreateTrueColor($wm_width,$wm_height);	//canvas created
	$image= ImageCreateFromJPEG($source);
	
	$image_size= GetImageSize($source);	//not part of GD Library
	$x= $image_size[0]-$wm_width-10;
	$y= $image_size[1]-$wm_height-10;
	
	ImageCopyMerge($image,$wm,$x,$y,0,0,$wm_width,$wm_height,20);
	ImageJPEG($image);	//just show the result
	//ImageJPEG($image,$source.'_wm.jpg') saves it
}

?>