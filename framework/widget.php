<?php /* widget page */
require_once(TT_SUBSCRIBE_DIR.'framework/widget/settings.php');
require_once(TT_SUBSCRIBE_DIR.'framework/widget/functions.php');

// Shortcode
add_action('tt_subscribe', 'tt_subscribe');
add_shortcode('tt_subscribe', 'tt_subscribe');
?>