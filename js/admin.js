/*	admin.js */

jQuery(document).ready(function() {
	
	jQuery('#tt-subscribe-admin-select input[type=checkbox]').each(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}
	});
	
	jQuery('#tt-subscribe-admin-select input[type=checkbox]').click(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}

	});
	
	jQuery('div.tt-subscribe-admin-content').hide();
	jQuery('div#ts-1').show();
	jQuery('#tt-subscribe-admin-nav li').removeClass('active');
	jQuery('#tt-subscribe-admin-nav li#ts1').addClass('active');
	jQuery('#tt-subscribe-admin-nav li').click(function() {
		var id = jQuery(this).attr('id').substr(2);
			jQuery('div.tt-subscribe-admin-content').hide();
			jQuery('#tt-subscribe-admin-nav li').removeClass('active');
			jQuery('#tt-subscribe-admin-nav li#ts'+id).addClass('active');
			jQuery('div.tt-subscribe-admin-content#ts-'+id).show();
	});

});
