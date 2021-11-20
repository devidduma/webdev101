(function($){
	$.fn.countdown= function(options,callback) {
	
		var settings= {'date': null};
		if(options) $.extend(settings,options);
		
		var this_sel= $(this);
		function count_exec() {
			var eventDate= Date.parse(settings['date'])/1000;	//create it in secs, not millisecs
			var currentDate= Math.floor($.now()/1000);
			
			//create the values
			secs= eventDate-currentDate;
			if(secs>=0) {
				mins= Math.floor(secs/60)%60;
				hours= Math.floor(secs/(60*60))%24;
				days= Math.floor(secs/(60*60*24));
				secs %=60;
				
				//add leading zeros if neccessary
				days = (days < 10 ? '0' : '') + days;
				hours = (hours < 10 ? '0' : '') + hours;
				mins = (mins < 10 ? '0' : '') + mins;
				secs = (secs < 10 ? '0' : '') + secs;
				
				//display the values
				this_sel.find('.days').text(days);
				this_sel.find('.hours').text(hours);
				this_sel.find('.mins').text(mins);
				this_sel.find('.secs').text(secs);
			}
			else {
				callback.call(this);
				clearInterval(interval);	//clear the Interval	<---<---
			}
		}
		
		count_exec();	//must include, because the setInterval executes only after the interval passed.
		interval= setInterval(count_exec,1000);	//set the Interval	--->--->
	};
})(jQuery);