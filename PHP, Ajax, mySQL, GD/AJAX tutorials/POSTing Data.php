<html>
<head>

<script type="text/javascript">
	function insert() {
	if(window.XMLHttpRequest)
		xmlhttp= new XMLHttpRequest();
	else
		xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
	
	xmlhttp.onreadystatechange= function() {
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
			document.getElementById('message').innerHTML= xmlhttp.responseText;	
	}
	
	parameters= 'text='+ document.getElementById('text').value;	//new line 1
	xmlhttp.open('POST','update.inc.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded'); //new line 2
	xmlhttp.send(parameters); //notice now we send parameters
	}
</script>

</head>
<body>

Insert: <input type="text" id="text" /> <input type="button" value="Submit" onclick="insert();" />
<div id="message"></div>

</body>
</html>
