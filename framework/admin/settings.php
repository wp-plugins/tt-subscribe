<?php // tt_subscribe admin settings

// tt_subscribe admin menu
function tt_subscribe_admin_menu() {
	//top-level menu
	add_menu_page('TT-Subscribe', 'TT-Subscribe', 'administrator', 'tt-subscribe', 'tt_subscribe_html_page');
	
	//submenus
	add_submenu_page( 'tt-subscribe', 'Basic Settings', 'Basic Settings', 'manage_options', 'tt-subscribe-basic', 'tt_subscribe_basic_page' );
	add_submenu_page( 'tt-subscribe', 'Subscriptions', 'Subscriptions', 'manage_options', 'tt-subscribe-subscriptions', 'tt_subscribe_subscriptions_page' );
	add_submenu_page( 'tt-subscribe', 'Advance Settings', 'Advance Settings', 'manage_options', 'tt-subscribe-advance', 'tt_subscribe_advance_page' );
	add_submenu_page( 'tt-subscribe', 'Support', 'Support', 'manage_options', 'tt-subscribe-support', 'tt_subscribe_support_page' );
	add_submenu_page( 'tt-subscribe', 'About', 'About', 'manage_options', 'tt-subscribe-about', 'tt_subscribe_about_page' );

	//call register settings function
	add_action('admin_init', 'tt_subscribe_data_init');

	//call scripts function
	add_action('admin_init', 'tt_subscribe_admin_scripts');
	
}

// tt_subscribe scripts
function tt_subscribe_admin_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('tt_subscribe_admin.js', TT_SUBSCRIBE_URL.'js/admin.js');
    wp_enqueue_style('tt_subscribe_admin.css', TT_SUBSCRIBE_URL.'css/admin.css');
}

// tt_subscribe data
function tt_subscribe_data_init() {
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-text' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-prefix' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-background' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-color' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-width' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-facebook');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-twitter');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-google');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-feedburner');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-facebook-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-facebook-txt' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-twitter-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-twitter-txt' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-google-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-google-txt' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-feedburner-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-feedburner-txt' );
	register_setting( 'tt_subscribe_data_advance', 'tt-subscribe-css' );
	register_setting( 'tt_subscribe_data_advance', 'tt-subscribe-script' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-select-name' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-name' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-font-color' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-font-hover' );
	register_setting( 'tt_subscribe_data_basic', 'tt-subscribe-font-active' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-instagram');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-instagram-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-instagram-txt' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-select-youtube');
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-youtube-url' );
	register_setting( 'tt_subscribe_data_subscription', 'tt-subscribe-youtube-txt' );
}

// tt_subscribe selection
function tt_subscribe_selection() {
			if ( isset($_POST['submit']) ) {
				
				if ( isset( $_POST['tt-subscribe-select-facebook'] ) )
					update_option( 'tt-subscribe-select-facebook', 'select-facebook' );
				else
					update_option( 'tt-subscribe-select-facebook', 'false' );
			
				if ( isset( $_POST['tt-subscribe-select-twitter'] ) )
					update_option( 'tt-subscribe-select-twitter', 'select-twitter' );
				else
					update_option( 'tt-subscribe-select-twitter', 'false' );
					
				if ( isset( $_POST['tt-subscribe-select-google'] ) )
					update_option( 'tt-subscribe-select-google', 'select-google' );
				else
					update_option( 'tt-subscribe-select-google', 'false' );
					
				if ( isset( $_POST['tt-subscribe-select-feedburner'] ) )
					update_option( 'tt-subscribe-select-feedburner', 'select-feedburner' );
				else
					update_option( 'tt-subscribe-select-feedburner', 'false' );
				
				if ( isset( $_POST['tt-subscribe-select-name'] ) )
					update_option( 'tt-subscribe-select-name', 'select-name' );
				else
					update_option( 'tt-subscribe-select-name', 'false' );
					
				if ( isset( $_POST['tt-subscribe-select-instagram'] ) )
					update_option( 'tt-subscribe-select-instagram', 'select-instagram' );
				else
					update_option( 'tt-subscribe-select-instagram', 'false' );
					
				if ( isset( $_POST['tt-subscribe-select-youtube'] ) )
					update_option( 'tt-subscribe-select-youtube', 'select-youtube' );
				else
					update_option( 'tt-subscribe-select-youtube', 'false' );
		}	
}

// set global variable
$sitename = get_bloginfo( 'name' );
?>