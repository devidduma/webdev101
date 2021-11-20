<?php

$name= $_FILES['file']['name'];
$size= $_FILES['file']['size'];
$type= $_FILES['file']['type'];

$tmp_name= $_FILES['file']['tmp_name'];
//checks whether there has been an error: $error= $_FILES['file']['error'];

if(isset($name)) {
	if(!empty($name)) {
		if($type=='image/jpg'||$type=='image/jpeg') {	//type validator
			if($size<= 1*1024*1024) {	//size validator
			
				$location= 'uploads/';
				if(move_uploaded_file($tmp_name, $location.$name)) echo 'Uploaded Successfully!';
			}
			else echo 'File must be less than 1MB.';
		}
		else echo 'File must be jpg/jpeg.';
	}
	else echo 'Please choose a file.';
}

?>

<form action="Uploading Files.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" value="Submit">
</form>