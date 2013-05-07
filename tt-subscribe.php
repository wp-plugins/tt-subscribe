<?php
/*
	Plugin Name: TT - Subscribe
	Plugin URI: http://wordpress.org/extend/plugins/tt-subscribe/
	Description: This plugin is a simplified subscription box that is totally customizable. It currently includes facebook, twitter, google plus and feedburner.
	Version: 2.0
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
	Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2013  THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)

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
require_once(TT_SUBSCRIBE_DIR.'install.php');
require_once(TT_SUBSCRIBE_DIR.'widget.php'); /* fix on sidebar area */

// Load Plugin
add_action('init', 'load_tt_subscribe_scripts');
if ( is_admin() ) {
	require_once(TT_SUBSCRIBE_DIR.'admin.php');
	add_action('admin_menu', 'tt_subscribe_admin_menu');
}

require_once(TT_SUBSCRIBE_DIR.'defaults.php');

// for hook
add_action('tt_subscribe', 'tt_subscribe');
add_shortcode('tt_subscribe', 'tt_subscribe'); /* fix on content area: post or page */

function load_tt_subscribe_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('script.js', TT_SUBSCRIBE_URL.'scripts/script.js');
    wp_enqueue_style('style.css', TT_SUBSCRIBE_URL.'styles/style.css');	
}

function tt_subscribe() {
	
	$text = get_option( 'tt-subscribe-text' );
	$prefix = get_option( 'tt-subscribe-prefix' );
	$background = get_option( 'tt-subscribe-background' );
	$color = get_option( 'tt-subscribe-color' );
	$width = get_option( 'tt-subscribe-width' );
	$facebook_icon = get_option( 'tt-subscribe-select-facebook');
	$twitter_icon = get_option( 'tt-subscribe-select-twitter');
	$google_icon = get_option( 'tt-subscribe-select-google');
	$feedburner_icon = get_option( 'tt-subscribe-select-feedburner');
	$facebook_url = get_option( 'tt-subscribe-facebook-url' );
	$facebook_txt = get_option( 'tt-subscribe-facebook-txt' );
	$twitter_url = get_option( 'tt-subscribe-twitter-url' );
	$twitter_txt = get_option( 'tt-subscribe-twitter-txt' );
	$google_url = get_option( 'tt-subscribe-google-url' );
	$google_txt = get_option( 'tt-subscribe-google-txt' );
	$feedburner_url = get_option( 'tt-subscribe-feedburner-url' );
	$feedburner_txt = get_option( 'tt-subscribe-feedburner-txt' );
	
	$width_outer = $width;
	if(isset($width_outer)) $width_outer; else $width_outer=280;
	$width_inner = $width;
	if(isset($width_inner)) $width_inner-=20; else $width_inner=260;
	
	$facebook_urlencode = urlencode($facebook_url);
	$twitter_tag = substr($twitter_url,24); // https://www.twitter.com/ = 23char 
	$twitter_tag = '@'.$twitter_tag;
?>
    <div id="tt-subscribe">
        <div id="tt-subscribe-scripts">
            <style>
            div#tt-subscribe, #tt-subscribe-icons { width: <?=$width_outer; ?>px!important; }
            #tt-subscribe-header { background: #<?=$background; ?>!important; color: #<?=$color; ?>!important; }
			#tt-subscribe h1 { color: #<?=$color; ?>!important; }
            #tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-feedburner {
                 width: <?=$width_inner; ?>px!important;
            }
            </style>
            <!-- Google+ Script -->
            <script type="text/javascript">
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
            <!-- Twitter Script -->
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>                    
        </div>
        <div id="tt-subscribe-header">
            <h1><span id="h1up"><?=$text; ?></span><br /><?=$prefix; ?> <?php bloginfo( $show ); ?></h1>
            <div id="tt-subscribe-icons">
				<?php if( $facebook_icon != false) { ?>
                    <div id="tt-subscribe-facebook"></div>
				<?php } if( $twitter_icon != false) { ?>
                    <div id="tt-subscribe-twitter"></div>
				<?php } if( $google_icon != false) { ?>
                    <div id="tt-subscribe-google"></div>
				<?php } if( $feedburner_icon != false) { ?>
                      <div id="tt-subscribe-feedburner"></div>
				<?php } ?>
            </div>
        </div>
        <div id="tt-subscribe-area">
        	<?php if( $facebook_icon != false) { ?>
                <div id="tt-subscribe-area-facebook">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?=$facebook_urlencode; ?>&amp;send=false&amp;layout=standard&amp;width=<?=$width_inner; ?>&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?=$width_inner; ?>px; height:65px;" allowTransparency="true"></iframe>
	                <a href="<?=$facebook_url; ?>" alt="<?=$facebook_text; ?>"><?=$facebook_url; ?></a>
                </div>
            <?php 
			} 
			if( $twitter_icon != false) { ?>
                <div id="tt-subscribe-area-twitter">
                    <a href="<?=$twitter_url; ?>" class="twitter-follow-button" data-width="<?=$width_inner; ?>px" data-show-screen-name="true" data-show-count="true" data-lang="en">Follow <?=$twitter_tag; ?></a>
                    <a href="<?=$twitter_url; ?>" alt="<?=$twitter_txt; ?>"><?=$twitter_txt; ?></a>
                    
                </div>
            <?php 
			} 
			if( $google_icon != false) { ?>
                <div id="tt-subscribe-area-google">
                    <div class="g-plusone" data-annotation="inline" data-width="<?=$width_inner; ?>" data-href="<?=$google_url; ?>"></div>
                    <a href="<?=$google_url; ?>" alt="<?=$google_txt; ?>"><?=$google_txt; ?></a>
                </div>
            <?php 
			} 
			if( $feedburner_icon != false) { ?>
                <div id="tt-subscribe-area-feedburner">
                   <a href="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" alt="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>"><?php echo get_option('tt-subscribe-feedburner-txt'); ?></a>
                </div>
            <?php } ?>
    	</div>
	</div>
<?php
}
?>