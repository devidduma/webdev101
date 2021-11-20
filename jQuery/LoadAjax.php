<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery Load with Ajax</title>
</head>
<body>
	<input id="button" type="button" value="Load" />
	<div id="content"></div>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#button').click(function(){
				$('#content').load('loadtopage.html');
				/*
				The .load() method, unlike $.get(), allows us to specify a portion of the remote document to be inserted.
				This is achieved with a special syntax for the url parameter. If one or more space characters are included in the string,
				the portion of the string following the first space is assumed to be a jQuery selector that determines the content to be loaded.
				*/
			});
		});
	</script>
</body>
</html>