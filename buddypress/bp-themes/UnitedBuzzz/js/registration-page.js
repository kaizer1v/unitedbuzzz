var vbn, cur, next, currentINDEX;
jQuery(document).ready(function(){
	
	jQuery("#footer").css("margin-bottom", "0px");

	/*Logo Border Removal*/
	jQuery('#r-logo-text img').focus(function(){
		jQuery(this).blur();
	});
	
	jQuery('img').focus(function(){
		jQuery(this).blur();
	});
	/*Registration Slider Code*/
	jQuery('#r-slideshow').children().last().addClass('slideshow-active');
	totalINDEX = jQuery('#r-slideshow').children().length;
	
	jQuery('#next-image').click(function(){
		clearTimeout(vbn);
		currentINDEX = jQuery('.r-slider-active').index();
		nextINDEX = currentINDEX + 1;
		if(nextINDEX == totalINDEX){
			nextINDEX = 0;
		}
		jQuery('.registration-slider-dots').removeClass('r-slider-active');
		jQuery('.registration-slider-dots').eq(nextINDEX).addClass('r-slider-active');
		jQuery('.slideshow-active').fadeOut(function(){
			jQuery(this).removeClass('slideshow-active');						
			vbn = setTimeout( "r_slideSwitch()", 5000 );
		})
		jQuery('#r-slideshow').children().eq(nextINDEX).fadeIn(function(){
			jQuery(this).addClass('slideshow-active');
		})
	})
	
	jQuery('#previous-image').click(function(){
		clearTimeout(vbn);
		currentINDEX = jQuery('.r-slider-active').index();
		previousINDEX = currentINDEX - 1;
		if(previousINDEX == -1){
			previousINDEX = totalINDEX - 1;
		}
		jQuery('.registration-slider-dots').removeClass('r-slider-active');
		jQuery('.registration-slider-dots').eq(previousINDEX).addClass('r-slider-active');
		jQuery('.slideshow-active').fadeOut(function(){
			jQuery(this).removeClass('slideshow-active');						
			vbn = setTimeout( "r_slideSwitch()", 5000 );
		})
		jQuery('#r-slideshow').children().eq(previousINDEX).fadeIn(function(){
			jQuery(this).addClass('slideshow-active');
		})
	})
	
	jQuery('.registration-slider-dots').click(function(){
		clearTimeout(vbn);
		if(jQuery(this).hasClass('r-slider-active')){
			vbn = setTimeout( "r_slideSwitch()", 5000 );
			return
		}
		currentINDEX = jQuery(this).index();
		jQuery('.registration-slider-dots').removeClass('r-slider-active');
		jQuery(this).addClass('r-slider-active');
		jQuery('.slideshow-active').fadeOut(function(){
			jQuery(this).removeClass('slideshow-active');						
			vbn = setTimeout( "r_slideSwitch()", 15000 );
		})
		jQuery('#r-slideshow').children().eq(currentINDEX).fadeIn(function(){
			jQuery(this).addClass('slideshow-active');
		})
		
	})

	r_slideSwitch();
});
function r_slideSwitch() {
	cur=jQuery('.slideshow-active')
	next=cur.next()
	if(next.length == 0){
		next=jQuery('#r-slideshow').children().eq(0)
	}
	jQuery('.registration-slider-dots').removeClass('r-slider-active')
	jQuery('.registration-slider-dots').eq(jQuery('#r-slideshow').children().index(next)).addClass('r-slider-active')
	cur.fadeOut(function(){
		$(this).removeClass('slideshow-active')
		vbn = setTimeout( "r_slideSwitch()", 5000);
	})
	next.fadeIn().addClass('slideshow-active')
}
