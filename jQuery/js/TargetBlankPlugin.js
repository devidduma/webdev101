(function($){
	$.fn.targetBlank= function() {	//you first give the name of the plugin function
		var targetArray= ['_blank','_self','_parent','_top'];
		var target= $.trim($(this).attr('target'));
		
		if(target==undefined || !jQuery(target,targetArray))
			$(this).attr('target','_blank');
	}
})(jQuery);