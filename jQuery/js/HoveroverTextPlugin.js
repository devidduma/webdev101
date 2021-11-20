(function($){
	$.fn.hoverText= function(hovertext,fade) {
			this.each(function() {
			
				var title= $(this).attr('title');	//note that without var, it will become global, and its value will remain the value of the attribute
							//of the last element encountered by this.each()
				if(title!=undefined && title!='')
					$(this).mouseenter(function(){
						$(this).removeAttr('title');	//remove, for the tooltip not to show
						$(hovertext).text(title);
							if(fade) $(hovertext).fadeIn(fade);
							else $(hovertext).show();
					}).mousemove(function(e){
						var top= e.pageY+10;
						var left= e.pageX+10;
						$(hovertext).css('top',top).css('left',left);
					}).mouseout(function(){
						$(this).attr('title',title);
						$(hovertext).hide();
					});
				
		});
	};
})(jQuery);