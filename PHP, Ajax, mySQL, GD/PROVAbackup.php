<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Abstract</title>
<link href="http://asef.al/data/css/reg_complete.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://asef.al/data/img/favicon.gif"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link type="text/css" href="http://asef.al/data/datepick/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="http://asef.al/data/datepick/jquery.datepick.js"></script>

<link type="text/css" href="http://asef.al/data/select2/select2.css" rel="stylesheet">
<script type="text/javascript" src="http://asef.al/data/select2/select2.min.js"></script>


		<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
		<script src="http://asef.al/data/fileupload/jquery.ui.widget.js"></script>
		<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
		<script src="http://asef.al/data/fileupload/jquery.iframe-transport.js"></script>
		<!-- The basic File Upload plugin -->
		<script src="http://asef.al/data/fileupload/jquery.fileupload.js"></script>

	<script>
		$(document).ready(function (){
			$('#birthday').datepick({
				minDate: new Date(1992, 1-1, 1), 
				maxDate: new Date(2003, 12-1, 31), 
				yearRange: '1992:2003', 
				showTrigger: '#calImg', 
				onSelect: function(dateText) {
			    	load_projects();
			  	}
			});
		
			var data=[];
	
			$("#project").select2({
	            data:{ results: data, text: 'tag' },
	            formatSelection: format,
	            formatResult: format
	        });
			
			$('#name').change(load_projects);
			$('#surname').change(load_projects);
			
			$("#project").change(function(){
				$('#note').fadeOut();
				$('#dragd').fadeIn();
			});
			
		});
		
		function load_projects(){
			
			$('#dragd').fadeOut();
			$('#note').fadeIn();
			$("#project").val('0');
			
			$.post('http://asef.al/get_projects', {name: $('#name').val(), surname: $('#surname').val(), birthday: $('#birthday').val() }, function(data){
				var json_dt = jQuery.parseJSON(data);
				$("#project").select2({
		            data:{ results: json_dt, text: 'tag' },
		            formatSelection: format,
		            formatResult: format
		        });
			});
			
		}
		
		function format(item) { return item.tag; };
	</script>
	
	<style>

		.bold_label{
			font-weight: bold;
			color: #222;
			line-height: 150%;
			margin: 0;
			padding: 0;
			border: none;
			display: block;
			white-space: normal;
			font-size: 95%;
			padding-top: 20px;
			padding-bottom: 5px;
		}

		.red{
			color: #F00;
		}

		.small_label{
			margin: 0;
			padding: 0;
			color: #444;
			display: block;
			font-size: 85%;
			line-height: 140%;
		}

		table { width: 760px; }
		td { width: 165px; }
		td input, td select { width: 94%;}
		.select2-container { width: 100%!important; }

		td input[type='text']{
			height: 20px;
			padding:0 3%;
			overflow: hidden;
			position: relative;
			border: 1px solid #aaa;
			white-space: nowrap;
			line-height: 20px;
			color: #333333;
			text-decoration: none;
			background-clip: padding-box;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: #fff;
			background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(0.5, #fff));
			background-image: -webkit-linear-gradient(center bottom, #eee 0%, #fff 50%);
			background-image: -moz-linear-gradient(center bottom, #eee 0%, #fff 50%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ffffff', endColorstr = '#eeeeee', GradientType = 0);
			background-image: linear-gradient(top, #fff 0%, #eee 50%);
			font-size: 12px;
		}

		.emptytd{
			width:50px;
		}
		
	
		#birthday{
			text-align: center;
		}
		
		
		#dragd{
			display: none;
		}
		
		.dragfile {
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-top-color: #2b7fbe;
			border-right-color: #ccc;
			border-bottom-color: #ccc;
			border-left-color: #2b7fbe;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			color: #666666;
			width: 100%;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 8px;
			background-color: #e2e2e2;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			outline: none;
			width: 100%;
			height: 100px;
			position: relative;
		}
		
		.dragfile span {
			position: absolute;
			z-index: 200;
			left: 0;
			display: block;
			top: 0px;
			width: 100%;
			text-align: center;
			height: 60px;
			padding-top: 40px;
		}
		
		#fileupload{
			width: 100%;
			height: 100%;
			opacity: 0;
			filter: alpha(opacity=0);
		}
		
		.dragover span{
			color: #2b7fbe;
			font-weight: bold;
		}

		.dragover{
			border: 1px solid #2b7fbe !important;
		}
		
		#res_msg{
			margin-top: 30px;
			display: block;
			color: #039;
		}
	
	  #samples{
			list-style: none;
			padding: 20px;
			margin: 0;
			margin-top: 30px;
			width:100%;
		}
		
		#samples li{
			float: left;
			border: 1px solid #999999;
			border-radius: 5px;
			margin-right:40px;
			margin-bottom: 20px;
			width: 200px;
		}
		
		#samples li a{
			text-decoration: none;
			color: red;
			font-size: 13px;
			font-size: 13px;
			font-weight: bold;
			padding: 5px 10px;
			display: block;
		}
		
		#samples li a .icon{
			display: block;
			width:20px;
			height:20px;
			float: left;
			background: url(http://asef.al/data/word_icon.png);
			background-size: 20px 20px;
			
		}

		</style>

	

</head>



<body>

<div id="wrapper">

<!--  *******************  Header ************************** -->

<div id="header">

<!--  ****  logo *** -->
 
<a href="http://asef.al/"><img src="http://asef.al/data/img/asef_logo.png" alt="logo" border="0" style= "width: 295px; height:131px;  float: left; margin: 12px 0px 8px 0px;" /></a>


<!--  ****  language *** -->
<div id="lang">
<span id="flag"><a href="javascript:void(0);"><img src="http://asef.al/data/img/flag_al.png" alt="Shqip" width="25" height="25" border="0"
style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/></a></span> 
<span id="flag"><img src="http://asef.al/data/img/ver_divider.jpg" /></span>
<span id="flag"><img src="http://asef.al/data/img/flag_en.png" width="25" height="25" alt="English" border="0" /></span>
</div>

<!--  ****  apliko tani *** -->

  
</div>

<!--  ********************  Navigation ********************* -->

<div id="navigation">
<p>
<a href="http://asef.al/">Home</a> |
<a href="http://asef.al/general_rules">Rules &amp; Guidelines</a> |
<a href="http://asef.al/apply">Apply</a> |
<a href="http://asef.al/upload_abstract">Upload Abstract</a> |
<a href="http://asef.al/winners2013"><blink>ASEF 2013 Winners</blink></a> |
<a href="http://asef.al/awards">Awards</a> | 
<a href="http://asef.al/organizers">Organizers & Sponsors </a>| 
<a href="http://asef.al/contact">Contact</a>
</p>
</div>

<!--  *******************  content ************************** -->
<div id="content">

	<table>
	
		<tr>	
			<td colspan="2"><label class="bold_label" for="st1_name">Student <span class="red">*</span></label></td>
			<td class="emptytd"></td>
			<td><label class="bold_label" for="st1_birthday">Birthday <span class="red">*</span></label></td>
			<td class="emptytd"></td>
			<td><label class="bold_label" for="project">Project <span class="red">*</span></label></td>
		</tr>
		
		<tr>
			<td>
				<input id="name" name="name" type="text" style="width:84%;" value="" />
				<label for="name" class="small_label" style="width:84%;">Name</label>
			</td>
			
			<td>
				<input id="surname" name="surname" type="text" value="" style="width:84%; margin-left:10%;" />
				<label for="surname" class="small_label" style="width:84%; margin-left:10%;">Surname</label>
			</td>
			
			
			<td class="emptytd"></td>
			
			<td>
				<input id="birthday" name="birthday" type="text" value="" autocomplete="off" />
				<label for="birthday" class="small_label">&nbsp;</label>
			</td>
			
			<td class="emptytd"></td>
			
			<td>
				<div style="padding:0; marging:0;" id="project_holder">
					<input id="project" name="project" type="hidden" />
				</div>
				
				<input type="hidden" name="project_id" id="project_id"/>
				
				<label for="project" class="small_label">&nbsp;</label>
			</td>
			
		</tr>
		
		<tr>
			<td style="padding:20px 0;">
				&nbsp;
			</td>
		</tr>
		
		<tr id="note">
			<td colspan="6" style="color: #444;">
			<span style="color: red;">Note:</span> Your project(s) will be automatically loaded after you have corretly completed above inputs.<br/>
				<span style="color: red;">Note:</span> You must include your name, surname, school name & title of project in your abstract.<br/>
				<span style="color: red;">Note:</span> Your file must be a word document or a PDF document.<br/>
			</td>

		</tr>
		
		<tr id="dragd">
			<td colspan="6">
				<div>
					<div class="dragfile" id="dragfile">
						<span>Please Drag Your Abstract Here (doc|docx|pdf)</span>
						<input id="fileupload" type="file" name="files" >
						<input name="cv_filename" type="hidden" id="cv_filename" />
					</div>
				</div>	
			</td>
		</tr>
		
	</table>

	<ul id="samples">
		<li><a href="http://asef.al//data/sample_abstracts/1.docx"><span class="icon"></span> Sample Abstract 1</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/2.docx"><span class="icon"></span> Sample Abstract 2</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/3.docx"><span class="icon"></span> Sample Abstract 3</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/4.docx"><span class="icon"></span> Sample Abstract 4</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/5.docx"><span class="icon"></span> Sample Abstract 5</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/6.docx"><span class="icon"></span> Sample Abstract 6</a></li>
		<li><a href="http://asef.al//data/sample_abstracts/7.docx"><span class="icon"></span> Sample Abstract 7</a></li>
	</ul>

</div> 





<!--  *******************  bottom ************************** -->



<div id="bottom">

<img src="http://asef.al/data/img/asef_divider1.png" width="800" height="16" />

<div id="org">
<a href="http://gulistan.edu.al" target="_blank"><img class="floatleft_" src="http://asef.al/data/img/gulistan.png" alt="gulistan" width="109" height="50" border="0"/></a>
<a href="http://turgutozal.edu.al" target="_blank"><img class="floatleft"src="http://asef.al/data/img/turgutozal.png" alt="gulistan" width="108" height="50" border="0"/></a>
<a href="http://epoka.edu.al" target="_blank"><img class="floatleft"src="http://asef.al/data/img/epoka.png" alt="epoka" width="118" height="50" border="0"/></a>
</div>


<div id="copyright">
<p>
<a href="http://asef.al/">Home</a> |
<a href="http://asef.al/general_rules">Rules &amp; Guidelines</a> |
<a href="http://asef.al/winners2013">ASEF 2013 Winners</a> |
<a href="http://asef.al/awards">Awards</a> | 
<a href="http://asef.al/organizers">Organizers & Sponsors </a>| 
<a href="http://asef.al/contact">Contact</a>
</p><p><a href="mailto:info@asef.al">info@asef.al</a> &nbsp;  &copy; asef 2012 - 2014</p>
</div>


</div>


</div>





<script>

		

		 var addedfiles = 0;

		 

		/*jslint unparam: true */

		/*global window, $ */

		$(function () {

		    'use strict';

		    // Change this to the location of your server-side upload handler:

		   

		    $('#fileupload').fileupload({

		        url: 'http://asef.al/upload_abstract_file',

		        dataType: 'json',

		        done: function (e, data) {

					 $('#dragfile span').html(data.files[0].name);

					

					if(data.result.status=='success'){

						$('#content').html('<span id="res_msg">'+data.result.msg+'</span>');

					}

					else{

						alert(data.result.msg);

					}

		        },

				fail: function (e, data) {

//					console.log(data.jqXHR.responseText);

		        },

		        progressall: function (e, data) {

		            var progress = parseInt(data.loaded / data.total * 100, 10);

		           	$('.dragfile span').text(progress + '%');	

		        },

				dropZone: 	$('.dragfile'),

				add: function (e, data) {

			        var goUpload = true;

					

			        var uploadFile = data.files[0];

			        if (!(/\.(doc|docx|pdf)$/i).test(uploadFile.name)) {

			            alert('Only Microsoft Word & PDF documents are suported!');

			            goUpload = false;

						$('#dragfile span').html('Please Drag Your Abstract Here (doc|docx|pdf)');

			        }

			        if(addedfiles>0){

						alert('You have already uploaded your Abstract!');

			            goUpload = false;

					}

			        if (goUpload == true) {

						

						if($('#project').val()!='' && $('#project').val()!=undefined){

							data.formData = { project_id: $('#project').val() }

							addedfiles++;

			            	data.submit();

						}

						else{

							alert('Please choose your project properly');

						}

						

			        }

			    }

		    });

		});

		

		

		function FileDragHover(e){

			$(this).addClass('dragover');

		}



		function FileUnDragHover(e){

			$(this).removeClass('dragover');

		}



		function FileDropH(){

			$(this).removeClass('dragover');

			$('span', this).html('The file is chosen');

		}



		var filedrag = document.getElementById('dragfile');



		filedrag.addEventListener("dragover", FileDragHover, false);

		filedrag.addEventListener("dragleave", FileUnDragHover, false);

		filedrag.addEventListener("drop", FileDropH, false);

		</script>

</body>

</html>

