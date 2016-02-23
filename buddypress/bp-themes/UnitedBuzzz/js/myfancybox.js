function callfancybox(){
	jQuery(".overlay").fadeIn(150, function(){
			var xxx = jQuery(".list-lightbox");
			xxx.fadeIn();
			xxx.css("position","fixed");
			xxx.css("top", (((jQuery(window).height() - xxx.outerHeight()) / 2)-20) + "px");
			xxx.css("left", ((jQuery(window).width() - xxx.outerWidth()) / 2) + "px");
	});
}
function closefancybox(){
	jQuery(".list-lightbox").fadeOut(150,function(){
		jQuery(".overlay").fadeOut().unbind('click');
		jQuery(document).unbind('keypress');
	});
}


jQuery(".overlay").live('click',function(){
	closefancybox();
})

//dont remove lightbox if click on the list box
jQuery(".list-lightbox").live('click',function(){
	return false;
})

//remove lightbox when escape key is pressed
jQuery(document).keypress(function(e){
	var code = e.keyCode || e.which;
	if(code==27){
		closefancybox();
	}
})
