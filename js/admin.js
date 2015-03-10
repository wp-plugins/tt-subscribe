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
	
	jQuery('div[id^="tt-subscribe-admin-selection"] input[type=checkbox]').each(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}
	});
	
	jQuery('div[id^="tt-subscribe-admin-selection"] input[type=checkbox]').click(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}
	});
});
