<?php
/*
	Plugin Name: TT - Subscribe
	Plugin URI: http://wordpress.org/extend/plugins/tt-subscribe/
	Description: This plugin is a simplified subscription box that supports unlimited customization. It currently includes facebook, twitter, google plus and feedburner. Wigetized, hooked, full control and total customization, mobile friendly, responsive, new dashboard and many more features!
	Version: 4.0
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
	Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2014  THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Define paths and variables
define('TT_SUBSCRIBE_FILE', __FILE__ );
define('TT_SUBSCRIBE_DIR', plugin_dir_path(__FILE__));
define('TT_SUBSCRIBE_URL', plugin_dir_url(__FILE__));

// Include all files
require_once(TT_SUBSCRIBE_DIR.'includes/install.php');
require_once(TT_SUBSCRIBE_DIR.'includes/widget.php'); /* fix on sidebar area */

// Load Plugin
add_action('init', 'load_tt_subscribe_scripts');
add_action('wp_head', 'load_tt_subscribe_custom');
if ( is_admin() ) {
	require_once(TT_SUBSCRIBE_DIR.'includes/admin.php');
	add_action('admin_menu', 'tt_subscribe_admin_menu');
}

require_once(TT_SUBSCRIBE_DIR.'includes/defaults.php');

// for hook
add_action('tt_subscribe', 'tt_subscribe');
add_shortcode('tt_subscribe', 'tt_subscribe'); /* fix on content area: post or page */

function load_tt_subscribe_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('tt_subscribe_script.js', TT_SUBSCRIBE_URL.'js/script.js');
    wp_enqueue_style('tt_subscribe_style.css', TT_SUBSCRIBE_URL.'css/style.css');	
}

function load_tt_subscribe_custom() {
	require_once(TT_SUBSCRIBE_DIR.'includes/custom-codes.php');
}