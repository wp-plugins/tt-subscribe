/*	admin.js */

jQuery(document).ready(function() {
	
	jQuery('input[type=checkbox]').each(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}
	});
	
	jQuery('input[type=checkbox]').click(function() {
		var id = jQuery(this).attr('value').substr(7);
			if (jQuery(this).attr('checked')){
				jQuery('div#tt-subscribe-admin-'+id).show();
			} else {
				jQuery('div#tt-subscribe-admin-'+id).hide();
			}

	});
});
