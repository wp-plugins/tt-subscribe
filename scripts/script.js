/*	script.js */

jQuery(document).ready(function() {
	
	//hide all
	jQuery('div#tt-subscribe-icons div').each(function() {
        jQuery(this).removeClass('active');
    });
	jQuery('div#tt-subscribe-area div').each(function() {
		jQuery(this).hide();
	});
	
	//show first
	jQuery('div#tt-subscribe-icons div').first().addClass('active');
	jQuery('div#tt-subscribe-area div').first().show();
	
	
	//on clicking icons
	jQuery('div#tt-subscribe-icons div').click(function(){
		var clicked = jQuery(this).attr('id');
		var prefix = clicked.substr(0,13);
		var suffix = clicked.substr(12);
			
			//hide all
			jQuery('div#tt-subscribe-icons div').each(function() {
				jQuery(this).removeClass('active');
			});
			jQuery('div#tt-subscribe-area div').each(function() {
				jQuery(this).hide();
			});
			
			if(clicked=="tt-subscribe-google")
				jQuery('div#'+prefix+'area'+suffix+' div').show();

			
			//show clicked
			jQuery('div#'+prefix+'area'+suffix).show();
			jQuery('div#'+clicked).addClass('active');
			
			console.log('clicked:'+clicked);
	});
	
});
