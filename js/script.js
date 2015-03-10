/*	script.js */

jQuery(document).ready(function() {
	
	//hide all
	jQuery('div.tt-susbscribe-iconselect').each(function(index, obj) {
		jQuery(this).removeClass('tt-susbscribe-active');
		jQuery(this).children().last().removeClass('tt-susbscribe-current');
	});
	jQuery('div.tt-susbscribe-areaselect').each(function(index, obj) {
		jQuery(this).hide();
	});
	
	//show first for each widget on site
	jQuery('div#tt-subscribe').each(function(index, obj) {
		//area
		jQuery(this).children().next().children().first().show();
		
		//icons 
		jQuery(this).children().children().next().children().first().addClass('tt-susbscribe-active');
		jQuery('div.tt-susbscribe-active').each(function(index, obj) {
			jQuery(this).children().removeClass('tt-susbscribe-show');
			jQuery(this).children().addClass('tt-susbscribe-hide');
			jQuery(this).children().last().removeClass('tt-susbscribe-hide');
			jQuery(this).children().last().addClass('tt-susbscribe-current');
		});
	});
	
	//on clicking icons
	jQuery('div.tt-susbscribe-iconselect').click(function(index, obj){
		var clicked = jQuery(this).attr('id');
		var prefix = clicked.substr(0,13);
		var suffix = clicked.substr(12);
			
			//hide all
			jQuery('div.tt-susbscribe-iconselect').each(function(index, obj) {
				jQuery(this).removeClass('tt-susbscribe-active');
				jQuery(this).children().removeClass('tt-susbscribe-show');
				jQuery(this).children().removeClass('tt-susbscribe-hide');
				jQuery(this).children().removeClass('tt-susbscribe-current');
				jQuery(this).children().first().addClass('tt-susbscribe-show');
				jQuery(this).children().last().addClass('tt-susbscribe-hide');
			});
			jQuery('div.tt-susbscribe-areaselect').each(function(index, obj) {
				jQuery(this).hide();
			});
			
			//force google+ iframe
			if(clicked=="tt-subscribe-google")
				jQuery('div#'+prefix+'area'+suffix+' div').show();
			
			//show clicked
			jQuery('div#'+prefix+'area'+suffix).show();
			jQuery('div#'+clicked).addClass('tt-susbscribe-active');
			
			jQuery('.tt-susbscribe-active').each(function(index,obj) {
				jQuery(this).children().removeClass('tt-susbscribe-show');
				jQuery(this).children().removeClass('tt-susbscribe-hide');
				jQuery(this).children().first().addClass('tt-susbscribe-hide');
				jQuery(this).children().last().addClass('tt-susbscribe-show');
				jQuery(this).children().last().addClass('tt-susbscribe-current');
			});
						
//			console.log('clicked: '+clicked);
//			console.log('prefix: '+prefix);
//			console.log('suffix: '+suffix);
	});
		
	jQuery('div.tt-susbscribe-iconselect').mouseover(function(index, obj){
 		if(jQuery(this).children().last().hasClass('tt-susbscribe-current')){
			jQuery(this).children().removeClass('tt-susbscribe-hide');
			jQuery(this).children().removeClass('tt-susbscribe-show');
			jQuery(this).children().first().addClass('tt-susbscribe-hide');
			jQuery(this).children().last().addClass('tt-susbscribe-show');
		} else {
			jQuery(this).children().removeClass('tt-susbscribe-hide');
			jQuery(this).children().removeClass('tt-susbscribe-show');
			jQuery(this).children().first().addClass('tt-susbscribe-hide');
			jQuery(this).children().last().addClass('tt-susbscribe-show');
		}
   });
	
	jQuery('div.tt-susbscribe-iconselect').mouseout(function(index, obj){
		if(jQuery(this).children().last().hasClass('tt-susbscribe-current')){
			jQuery(this).children().removeClass('tt-susbscribe-hide');
			jQuery(this).children().removeClass('tt-susbscribe-show');
			jQuery(this).children().first().addClass('tt-susbscribe-hide');
			jQuery(this).children().last().addClass('tt-susbscribe-show');
		} else {
			jQuery(this).children().removeClass('tt-susbscribe-hide');
			jQuery(this).children().removeClass('tt-susbscribe-show');
			jQuery(this).children().first().addClass('tt-susbscribe-show');
			jQuery(this).children().last().addClass('tt-susbscribe-hide');
		}
	});
});