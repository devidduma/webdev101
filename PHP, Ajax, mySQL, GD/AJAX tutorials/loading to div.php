<html>
<head>

<script type="text/javascript">
function load(thediv,thefile) {
	if(window.XMLHttpRequest)
		xmlhttp= new XMLHttpRequest();
	else
		xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
	
	xmlhttp.onreadystatechange= function() {
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
			document.getElementById(thediv).innerHTML= xmlhttp.responseText;
	}
	xmlhttp.open('GET',thefile,true);
	xmlhttp.send();
}
</script>

</head>
<body>

<input type="submit" onclick="load('adiv','load.inc.php');" />
<div id="adiv"></div>

</body>
</html>

<!--
<php

if(isset($_GET['show'])) include $_GET['show'];

?>

<input type="submit" onclick="window.location='loading to div.php?show=load.inc.php'" />
-->