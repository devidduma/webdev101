$('p').text('Hello!');
$('p:first').text('HELLO! FIRST!');
$('p:last').text('HELLO! LAST!');

$(':button').click(function() {
	$(this).attr('value','Please Wait...');	//notice: attr stands for attribute
});