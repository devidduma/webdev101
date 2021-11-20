$(':text,textarea').focusin(function(){
	$(this).css('background-color','lightyellow');
});

$(':text,textarea').blur(function(){
	$(this).css('background-color','white');
});