<?php
/*
	Plugin Name: TT - Subscribe
	Plugin URI: http://wordpress.org/extend/plugins/tt-subscribe/
	Description: Simple, minimal, customizable, responsive and mobile-ready social media subscription box. Includes only the latest and major social media networks according to Forbes namely Facebook, Twitter, Youtube, Instagram, Google+ and Feedburner. Widget and shortcode ready. Nothing can go wrong with your social media subscription box with the all new dashboard settings and support. You can change the skin and looks of your subscription box. You can even add additional functionalities and scriptings with this plugin.
	Version: 4.0.2
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
	Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2015  THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)

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
require_once(TT_SUBSCRIBE_DIR.'framework/widget.php');

// Load Plugin
add_action('init', 'load_tt_subscribe_scripts');
add_action('wp_head', 'load_tt_subscribe_custom');
if ( is_admin() ) {
	require_once(TT_SUBSCRIBE_DIR.'framework/admin.php');
	add_action('admin_menu', 'tt_subscribe_admin_menu');
}

function load_tt_subscribe_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('tt_subscribe_script.js', TT_SUBSCRIBE_URL.'js/script.js');
    wp_enqueue_style('tt_subscribe_style.css', TT_SUBSCRIBE_URL.'css/style.css');	
    wp_enqueue_style('tt_subscribe_includes_font_awesome.css', TT_SUBSCRIBE_URL.'includes/font-awesome-4.3.0/css/font-awesome.min.css');
}

function load_tt_subscribe_custom() {
	require(TT_SUBSCRIBE_DIR.'framework/widget/custom-codes.php');
}
?>