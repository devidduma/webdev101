(function($){
	$.fn.highlight= function(options) {
		var settings= {
			'background-color': null,
			'foreground': null
		};
		if(options) $.extend(settings, options);
		
		this.css('background-color',settings['background-color']).css('foreground',settings['foreground']);
	}
})(jQuery);