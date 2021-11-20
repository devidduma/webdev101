<?php

header('Content-type: image/jpeg');

if(isset($_GET['image'])) {
	$image= $_GET['image'];
	
	$image_size= GetImageSize($image);
	$width= $image_size[0];
	$height= $image_size[1];
	
	if(($width/$height)>(150/100)) {
		$new_width= 150;
		$new_height= $height*(150/$width);
	}
	else {
		$new_height= 100;
		$new_width= $width*(100/$height);
	}
	
	$new_image= ImageCreateTrueColor($new_width,$new_height);
	$old_image= ImageCreateFromJPEG($image);
	
	ImageCopyResized($new_image,$old_image, 0,0,0,0, $new_width,$new_height,$width,$height);
	ImageJPEG($new_image, $image.'.thumb.jpg');
	
	/*to create an idea about 150x100
	
	$boximg= ImageCreate(150,100);
	ImageColorAllocate($boximg, 0,0,0);
	ImageJPEG($boximg);
	
	*/
}

?>