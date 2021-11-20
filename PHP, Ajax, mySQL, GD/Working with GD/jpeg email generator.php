<?php

header('Content-type: image/jpeg');
$conn= mysqli_connect('localhost','root','','my_own_database') or die('Could not connect!');

if(isset($_GET['id'])&&!empty($_GET['id'])) {
	$id= mysqli_real_escape_string($conn,$_GET['id']);
	$result= mysqli_query($conn,"SELECT email FROM users WHERE id=$id");
	if(mysqli_num_rows($result)) {
		$row= mysqli_fetch_row($result);
		$email= $row[0];
		}
	else $email= 'ID not found.';
	}
else $email= 'No ID specified.';

$email_length= strlen($email);

$font_size= 4;
$height= ImageFontHeight($font_size);
$width= ImageFontWidth($font_size)*$email_length;

$image= ImageCreate($width,$height);	//canvas created
ImageColorAllocate($image, 255, 255, 255);	//set background Red Green Blue (RGB)

$font_color= ImageColorAllocate($image, 0, 0, 0);
ImageString($image, $font_size, 0, 0, $email, $font_color);
ImageJpeg($image);	//outputs

?>