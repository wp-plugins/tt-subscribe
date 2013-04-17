<?php /* admin page */

function tt_subscribe_admin_menu() {
	//create new top-level menu
	add_menu_page('TT-Subscribe', 'TT-Subscribe', 'administrator', 'tt-subscribe', 'tt_subscribe_html_page');
	
	//call register settings function
	add_action('admin_init', 'tt_subscribe_data_init');
	add_action('admin_init', 'tt_subscribe_admin_scripts');
}

function tt_subscribe_admin_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('admin.js', TT_SUBSCRIBE_URL.'scripts/admin.js');
    wp_enqueue_style('admin.css', TT_SUBSCRIBE_URL.'styles/admin.css');
	
}

function tt_subscribe_data_init() {
	// tt_subscribe data
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-text' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-prefix' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-background' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-width' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-select-facebook');
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-select-twitter');
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-select-google');
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-select-feedburner');
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-facebook-url' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-facebook-txt' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-twitter-url' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-twitter-txt' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-google-url' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-google-txt' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-feedburner-url' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-feedburner-txt' );

}

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
				
		}	
}

function tt_subscribe_html_page() {
	tt_subscribe_selection();
?>
    <div id="tt-subscribe-admin">
        <h1>TT-Subscribe Admin Panel</h1>

        <form method="post" action="options.php">
            <?php settings_fields( 'tt_subscribe_data_group' ); ?>
    
            <div id="tt-subscribe-admin-panel">
            <h2>Look and Feel:</h2>
            <div><label for="tt-subscribe-text">Header Text</label></div>
            <input name="tt-subscribe-text" type="text" id="tt-subscribe-text" value="<?php echo get_option('tt-subscribe-text'); ?>" />
                        <p>(ex. Get our top stories, text style is uppercased)</p>
            <div><label for="tt-subscribe-prefix">Prefix Text</label></div>
            <input name="tt-subscribe-prefix" type="text" id="tt-subscribe-prefix" value="<?php echo get_option('tt-subscribe-prefix'); ?>" />
                        <p>(ex. Follow, text format is (prefix + sitename) and text style is uppercased)</p>
            <div><label for="tt-subscribe-background">Background Color</label></div>
            <input name="tt-subscribe-background" type="text" id="tt-subscribe-background" value="<?php echo get_option('tt-subscribe-background'); ?>" />
                        <p>(ex. 6d84b4, original background color settings)</p>
            <div><label for="tt-subscribe-width">Width</label></div>
            <input name="tt-subscribe-width" type="text" id="tt-subscribe-width" value="<?php echo get_option('tt-subscribe-width'); ?>" />
                        <p>(ex. 280, original width settings)</p>
            </div>
            
            <div id="tt-subscribe-admin-select">
            <h2>Subscribe Settings</h2>
                <div id="selection">                
                    <label for="tt-subscribe-select-facebook">Facebook:</label>
                    <input name="tt-subscribe-select-facebook" id="tt-subscribe-select-facebook" type="checkbox" value="select-facebook" <?php checked( get_option('tt-subscribe-select-facebook') == 'select-facebook' ); ?> /> 
                    <label for="tt-subscribe-select-twitter">Twitter:</label>
                    <input name="tt-subscribe-select-twitter" id="tt-subscribe-select-twitter" type="checkbox" value="select-twitter" <?php if ( get_option('tt-subscribe-select-twitter') == 'select-twitter' ) echo ' checked="checked"  '; ?> /> 
                    <label for="tt-subscribe-select-google">Google+:</label>
                    <input name="tt-subscribe-select-google" id="tt-subscribe-select-google" type="checkbox" value="select-google" <?php if ( get_option('tt-subscribe-select-google') == 'select-google' ) echo ' checked="checked"  '; ?> /> 
                    <label for="tt-subscribe-select-feedburner">Feedburner:</label>
                    <input name="tt-subscribe-select-feedburner" id="tt-subscribe-select-feedburner" type="checkbox" value="select-feedburner" <?php if ( get_option('tt-subscribe-select-feedburner') == 'select-feedburner' ) echo ' checked="checked"  '; ?> />
                 </div>
    		</div>
            
            <div id="tt-subscribe-admin-facebook">
            <h2>Facebook:</h2>
            <div><label for="tt-subscribe-facebook-url">Facebook URL</label></div>
            <input name="tt-subscribe-facebook-url" type="text" id="tt-subscribe-facebook-url" value="<?php echo get_option('tt-subscribe-facebook-url'); ?>" />
                        <p>(ex. http://www.facebook.com/thesabeltuto)</p>
            <div><label for="tt-subscribe-facebook-txt">Facebook Text</label></div>
            <input name="tt-subscribe-facebook-txt" type="text" id="tt-subscribe-facebook-txt" value="<?php echo get_option('tt-subscribe-facebook-txt'); ?>" />
                        <p>(ex. Subscribe to my Facebook Page!)</p>
            </div>
    
            <div id="tt-subscribe-admin-twitter">
            <h2>Twitter:</h2>
            <div><label for="tt-subscribe-twitter-url">Twitter URL</label></div>
            <input name="tt-subscribe-twitter-url" type="text" id="tt-subscribe-twitter-url" value="<?php echo get_option('tt-subscribe-twitter-url'); ?>" />
                        <p>(ex. http://www.twitter.com/thesabeltuto)</p>
            <div><label for="tt-subscribe-twitter-txt">Twitter Text</label></div>
            <input name="tt-subscribe-twitter-txt" type="text" id="tt-subscribe-twitter-txt" value="<?php echo get_option('tt-subscribe-twitter-txt'); ?>" />
                        <p>(ex. Follow me on Twitter!)</p>
             </div>
             
            <div id="tt-subscribe-admin-google">
            <h2>Google+:</h2>
            <div><label for="tt-subscribe-google-url">Google+ URL</label></div>
            <input name="tt-subscribe-google-url" type="text" id="tt-subscribe-google-url" value="<?php echo get_option('tt-subscribe-google-url'); ?>" />
                        <p>(ex. https://plus.google.com/113266224716942959239)</p>
            <div><label for="tt-subscribe-google-txt">Google+ Text</label></div>
            <input name="tt-subscribe-google-txt" type="text" id="tt-subscribe-google-txt" value="<?php echo get_option('tt-subscribe-google-txt'); ?>" />
                        <p>(ex. Follow me on Google+!)</p>
             </div>
    
            <div id="tt-subscribe-admin-feedburner">
            <h2>Feedburner:</h2>
            <div><label for="tt-subscribe-feedburner-url">Feedburner URL</label></div>
            <input name="tt-subscribe-feedburner-url" type="text" id="tt-subscribe-feedburner-url" value="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" />
                        <p>(ex. http://www.facebook.com/thesabeltuto)</p>
            <div><label for="tt-subscribe-feedburner-txt">Feedburner Text</label></div>
            <input name="tt-subscribe-feedburner-txt" type="text" id="tt-subscribe-feedburner-txt" value="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>" />
                        <p>(ex. Get Updated! Bookmark this now!)</p>
            </div>
            <br />
			
            <input type="submit" name="submit" value="Save Changes" id="tt-subscribe-submit" />
        </form>
        
        <div id="tt-subscribe-admin-footer">Plugin created by <a href="http://thesabeltuto.blogspot.com">Thesabel Tuto</a> | Plugin site at <a href="http://ttplugins.wordpress.com/tt-subscribe/">TT Plugins</a></div>
    
    </div>
    
<?php
} // function tt_subscribe_html_page() ---- END
?>
