<?php
/*
	Plugin Name: TT - Subscribe
	Plugin URI: http://ttplugins.wordpress.com/tt-subscribe
	Description: This plugin is a simplified subscription box that is totally customizable. It currently includes facebook, twitter, google plus and feedburner. Other social media links will be included soon. Created by Thesabel Tuto.
	Version: 1.0
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
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

// Load Plugin
add_action('init', 'load_tt_subscribe_scripts');
if ( is_admin() ) {
	require_once(TT_SUBSCRIBE_DIR.'admin.php');
	add_action('admin_menu', 'tt_subscribe_admin_menu');
}

require_once(TT_SUBSCRIBE_DIR.'defaults.php');



function load_tt_subscribe_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('script.js', TT_SUBSCRIBE_URL.'scripts/script.js');
    wp_enqueue_style('style.css', TT_SUBSCRIBE_URL.'styles/style.css');
}

// for hook
add_action('tt_subscribe', 'tt_subscribe');

function tt_subscribe() {
?>

	<style>
	div#tt-subscribe, #tt-subscribe-icons { width: <?php echo get_option('tt-subscribe-width'); ?>px!important; }
    #tt-subscribe-header { background: #<?php echo get_option('tt-subscribe-background'); ?>!important; }
	#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-feedburner {
		 width: <?php echo get_option('tt-subscribe-width')-20; ?>px!important;
	}
    </style>

    <div id="tt-subscribe">
        <div id="tt-subscribe-header">
            <h1><span id="h1up"><?php echo get_option('tt-subscribe-text'); ?></span><br /><?php echo get_option('tt-subscribe-prefix'); ?> <?php bloginfo( $show ); ?></h1>
            <div id="tt-subscribe-icons">
				<?php if( get_option('tt-subscribe-select-facebook') != false) { ?>
                    <div id="tt-subscribe-facebook"></div>
				<?php } if( get_option('tt-subscribe-select-twitter') != false) { ?>
                    <div id="tt-subscribe-twitter"></div>
				<?php } if( get_option('tt-subscribe-select-google') != false) { ?>
                    <div id="tt-subscribe-google"></div>
				<?php } if( get_option('tt-subscribe-select-feedburner') != false) { ?>
                      <div id="tt-subscribe-feedburner"></div>
				<?php } ?>
            </div>
        </div>
        <div id="tt-subscribe-area">
        	<?php if( get_option('tt-subscribe-select-facebook') != false) { ?>
                <div id="tt-subscribe-area-facebook">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>  
                    <div class="fb-like" data-href="<?php echo get_option('tt-subscribe-facebook-url'); ?>" data-send="false" data-width="<?php echo get_option('tt-subscribe-width')-20; ?>" data-show-faces="true"></div>                                  
	                <a href="<?php echo get_option('tt-subscribe-facebook-url'); ?>" alt="<?php echo get_option('tt-subscribe-facebook-txt'); ?>"><?php echo get_option('tt-subscribe-facebook-txt'); ?></a>
                </div>
            <?php 
			} 
			if( get_option('tt-subscribe-select-twitter') != false) { ?>
                <div id="tt-subscribe-area-twitter">
                    <a href="<?php echo get_option('tt-subscribe-twitter-url'); ?>" class="twitter-follow-button" data-show-count="true" data-lang="en"><?php echo get_option('tt-subscribe-twitter-txt'); ?></a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>        
                    <a href="<?php echo get_option('tt-subscribe-twitter-url'); ?>" alt="<?php echo get_option('tt-subscribe-twitter-txt'); ?>"><?php echo get_option('tt-subscribe-twitter-txt'); ?></a>
                </div>
            <?php 
			} 
			if( get_option('tt-subscribe-select-google') != false) { ?>
                <div id="tt-subscribe-area-google">
                    <!-- Place this tag where you want the badge to render. -->
                    <div class="g-plus" data-width="<?php echo get_option('tt-subscribe-width')-20; ?>" data-height="69" data-href="<?php echo get_option('tt-subscribe-google-url'); ?>" data-rel="author"></div>
                    
                    <!-- Place this tag after the last badge tag. -->
                    <script type="text/javascript">
                      (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                   <a href="<?php echo get_option('tt-subscribe-google-url'); ?>" alt="<?php echo get_option('tt-subscribe-google-txt'); ?>"><?php echo get_option('tt-subscribe-google-txt'); ?></a>
                </div>
            <?php 
			} 
			if( get_option('tt-subscribe-select-feedburner') != false) { ?>
                <div id="tt-subscribe-area-feedburner">
                   <a href="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" alt="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>"><?php echo get_option('tt-subscribe-feedburner-txt'); ?></a>
                </div>
            <?php } ?>
    
        </div>
    </div>

<?php
}
?>






