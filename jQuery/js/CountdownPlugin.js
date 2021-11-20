(function(){
	$.fn.countdown= function(options,callback) {
	this_sel= this;
	
	var settings= {'from': 60 };
	if(options) $.extend(settings,options);
	
	current= settings['from'];
	function countdown_exec() {
		this_sel.text(current);
		if(current==0) {
			clearInterval(interval);
			callback.call(this);
			}
		current--;
	}
	
	interval= setInterval(countdown_exec,1000);
	}
})(jQuery);