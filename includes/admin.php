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
    wp_enqueue_script('tt_subscribe_admin.js', TT_SUBSCRIBE_URL.'js/admin.js');
    wp_enqueue_style('tt_subscribe_admin.css', TT_SUBSCRIBE_URL.'css/admin.css');
	
}

function tt_subscribe_data_init() {
	// tt_subscribe data
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-text' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-prefix' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-background' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-color' );
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
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-css' );
	register_setting( 'tt_subscribe_data_group', 'tt-subscribe-script' );
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
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts1"><a href="#">Basic Settings</a></li>
                <li id="ts2"><a href="#">Subscriptions</a></li>
                <li id="ts3"><a href="#">Advance</a></li>
                <li id="ts4"><a href="#">Support</a></li>
                <li id="ts5"><a href="#">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>

        <form method="post" action="options.php">
        <?php settings_fields( 'tt_subscribe_data_group' );
			do_settings_sections( 'tt_subscribe_data_group' ); ?>
        
        <div class="tt-subscribe-admin-content" id="ts-1">
            <h2>Basic Settings</h2>
            <?php submit_button(); ?>
            
            <div id="tt-subscribe-admin-panel">
                <h3>Look and Feel</h3>
                
                 <div>
                    <label for="tt-subscribe-text">Header Text</label>
                    <input name="tt-subscribe-text" type="text" value="<?php echo get_option('tt-subscribe-text'); ?>" />
                    <p>(ex. Get our top stories, text style is uppercased)</p>
                </div>
                
                 <div>
                   <label for="tt-subscribe-prefix">Prefix Text</label>
                    <input name="tt-subscribe-prefix" type="text" value="<?php echo get_option('tt-subscribe-prefix'); ?>" />
                    <p>(ex. Follow, text format is (prefix + sitename) and text style is uppercased)</p>
                </div>
               
                <div>
	                <label for="tt-subscribe-background">Background Color</label>
                    <input name="tt-subscribe-background" type="text" value="<?php echo get_option('tt-subscribe-background'); ?>" />
                    <p>(ex. 6d84b4, original background color settings)</p>
                </div>
                
                <div>
	                <label for="tt-subscribe-color">Text Color</label>
                    <input name="tt-subscribe-color" type="text" value="<?php echo get_option('tt-subscribe-color'); ?>" />
                    <p>(ex. ffffff, original text color settings)</p>
                </div>

                <div>
	                <label for="tt-subscribe-width">Width</label>
                    <input name="tt-subscribe-width" type="text" value="<?php echo get_option('tt-subscribe-width'); ?>" />
                    <p>(ex. 280, original width settings)</p>
                </div>
                
                
            </div>
                        
            <?php submit_button(); ?>
		</div>

        <div class="tt-subscribe-admin-content" id="ts-2">
            <h2>Subscription Settings</h2>
            <?php submit_button(); ?>

            <div id="tt-subscribe-admin-select">
                <h3>Enable/Disable Subscriptions</h3>
                <div id="tt-subscribe-admin-selection">                
                    <label for="tt-subscribe-select-facebook">Facebook:</label>
                    <input name="tt-subscribe-select-facebook" type="checkbox" value="select-facebook" <?php checked( get_option('tt-subscribe-select-facebook') == 'select-facebook' ); ?> /> 
                    <label for="tt-subscribe-select-twitter">Twitter:</label>
                    <input name="tt-subscribe-select-twitter" type="checkbox" value="select-twitter" <?php if ( get_option('tt-subscribe-select-twitter') == 'select-twitter' ) echo ' checked="checked"  '; ?> /> 
                    <label for="tt-subscribe-select-google">Google+:</label>
                    <input name="tt-subscribe-select-google" type="checkbox" value="select-google" <?php if ( get_option('tt-subscribe-select-google') == 'select-google' ) echo ' checked="checked"  '; ?> /> 
                    <label for="tt-subscribe-select-feedburner">Feedburner:</label>
                    <input name="tt-subscribe-select-feedburner" type="checkbox" value="select-feedburner" <?php if ( get_option('tt-subscribe-select-feedburner') == 'select-feedburner' ) echo ' checked="checked"  '; ?> />
                 </div>
    		</div>
            
            <div id="tt-subscribe-admin-facebook" class="tt-subscribe-admin-subs">
                <h3>Facebook:</h3>
                
                <div>
                <label for="tt-subscribe-facebook-url">Facebook URL</label>
                <input name="tt-subscribe-facebook-url" type="text" id="tt-subscribe-facebook-url" value="<?php echo get_option('tt-subscribe-facebook-url'); ?>" />
                <p>(ex. https://www.facebook.com/thesabeltuto)</p>
                </div>

                <div>
                <label for="tt-subscribe-facebook-txt">Facebook Text</label>
                <input name="tt-subscribe-facebook-txt" type="text" id="tt-subscribe-facebook-txt" value="<?php echo get_option('tt-subscribe-facebook-txt'); ?>" />
                <p>(ex. Subscribe to my Facebook Page!)</p>
                </div>
                
            </div>
    
            <div id="tt-subscribe-admin-twitter" class="tt-subscribe-admin-subs">
                <h3>Twitter:</h3>
                
                <div>
                <label for="tt-subscribe-twitter-url">Twitter URL</label>
                <input name="tt-subscribe-twitter-url" type="text" id="tt-subscribe-twitter-url" value="<?php echo get_option('tt-subscribe-twitter-url'); ?>" />
                <p>(ex. https://www.twitter.com/thesabeltuto)</p>
                </div>
                
                <div>
                <label for="tt-subscribe-twitter-txt">Twitter Text</label>
                <input name="tt-subscribe-twitter-txt" type="text" id="tt-subscribe-twitter-txt" value="<?php echo get_option('tt-subscribe-twitter-txt'); ?>" />
                <p>(ex. Follow me on Twitter!)</p>
                </div>
             </div>
             
            <div id="tt-subscribe-admin-google" class="tt-subscribe-admin-subs">
                <h3>Google+:</h3>
                
                <div>
                <label for="tt-subscribe-google-url">Google+ URL</label>
                <input name="tt-subscribe-google-url" type="text" id="tt-subscribe-google-url" value="<?php echo get_option('tt-subscribe-google-url'); ?>" />
                <p>(ex. https://plus.google.com/113266224716942959239)</p>
                </div>
                
                <div>
                <label for="tt-subscribe-google-txt">Google+ Text</label>
                <input name="tt-subscribe-google-txt" type="text" id="tt-subscribe-google-txt" value="<?php echo get_option('tt-subscribe-google-txt'); ?>" />
                <p>(ex. Follow me on Google+!)</p>
                </div>
             </div>
    
            <div id="tt-subscribe-admin-feedburner" class="tt-subscribe-admin-subs">
                <h3>Feedburner:</h3>
                
                <div>
                <label for="tt-subscribe-feedburner-url">Feedburner URL</label>
                <input name="tt-subscribe-feedburner-url" type="text" id="tt-subscribe-feedburner-url" value="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" />
                <p>(ex. http://feeds.feedburner.com/thesabeltuto)</p>
                </div>
                
                <div>
                <label for="tt-subscribe-feedburner-txt">Feedburner Text</label>
                <input name="tt-subscribe-feedburner-txt" type="text" id="tt-subscribe-feedburner-txt" value="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>" />
                <p>(ex. Get Updated! Bookmark this now!)</p>
                </div>
            </div>

            <?php submit_button(); ?>
            
		</div>
        
 
 		<div class="tt-subscribe-admin-content" id="ts-3">
        	<h2>Advance Settings</h2>
            <?php submit_button(); ?>
        			<h3>Custom Style</h3>
			<div class="tt-subscribe-admin-section"><textarea type="text" name="tt-subscribe-css" rows="7" cols="60" /><?php echo get_option('tt-subscribe-css'); ?></textarea>
            <br />Enter your custom style in css. No need to add &lt;style&gt; tags.
            </div>
			<h3>Custom Script</h3>
			<div class="tt-subscribe-admin-section"><textarea type="text" name="tt-subscribe-script" rows="7" cols="60" /><?php echo get_option('tt-subscribe-script'); ?></textarea>
            <br />Enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags.
            </div>
            <?php submit_button(); ?>
        </div>

        
		<div class="tt-subscribe-admin-content" id="ts-4">
			<h2>Support</h2>
            
			<h3>Widget</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>The widget can be displayed anywhere in your website.</p>
            	<p><strong>TT-Subscribe</strong> widget can be found in <strong>Dashboard > Appearance > Widgets</strong> and look for <strong>TT-Subscribe</strong> in the <strong>Available Widgets</strong> section.</p>
                <p><strong>Hooks</strong> can be used if you wish to display this widget on different areas of your website or theme. Add shortcode: <strong>[tt_subscribe]</strong>.</p>
            </div>

			<h3>Basic Settings</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Look and Feel section is for you to input the most basic information you will need to get this plugin up and running.</p>
            	<p><strong>Header Text</strong> is where you enter the title that will be displayed on the widget. The default text style for this entry will be displayed in uppercased in the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-text`.</p>
            	<p><strong>Prefix Text</strong> is where you enter the prefix title that will be followed by your wesbite name which is currently: <strong><?php bloginfo( $show ); ?></strong>. The default text style for this entry will be displayed in uppercased in the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-prefix`.</p>
            	<p><strong>Background Color</strong> is where you enter the hex number of the color that you want to be displayed as the background color of the widget's title. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-background`.</p>
            	<p><strong>Text Color</strong> is where you enter the hex number of the color that you want to be displayed as the text color of the widget's title. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-color`.</p>
             	<p><strong>Width</strong> is where you enter the number in pixels of the width you want for your widget. Please do not include the pixel code, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-width`.</p>
           </div>
			<h3>Subscriptions</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Subscription section is for you to input the select and input the type of subscriptions you wile this widget to display on your website.</p>
             	<p><strong>Enable/Disable Subscriptions</strong>. Check the box if you wish the subscription to be displayed to your website. Uncheck the checkbox if you wish to disable the display.</p>
               
            	<p><strong>Facebook URL</strong> is the url of your facebook fanpage or profile. If you wish to add this to your theme, the custom option is `tt-subscribe-facebook-url`.</p>
            	<p><strong>Facebook Text</strong> is where you enter the call to action text for your facebook fanpage or profile. This entry will be displayed at the bottom of the facebook subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-facebook-txt`.</p>
            	<p><strong>Twitter URL</strong> is the url of your twitter profile. If you wish to add this to your theme, the custom option is `tt-subscribe-twitter-url`.</p>
            	<p><strong>Twitter Text</strong> is where you enter the call to action text for your twitter profile. This entry will be displayed at the bottom of the twitter subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-twitter-txt`.</p>
            	<p><strong>Google+ URL</strong> is the url of your google+ page or profile. If you wish to add this to your theme, the custom option is `tt-subscribe-google-url`.</p>
            	<p><strong>Google+ Text</strong> is where you enter the call to action text for your google page or profile. This entry will be displayed at the bottom of the google subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-google-txt`.</p>
            	<p><strong>Feedburner URL</strong> is the url of your feedburner feed. If you wish to add this to your theme, the custom option is `tt-subscribe-feedburner-url`.</p>
            	<p><strong>Facebook Text</strong> is where you enter the call to action text for your feedburner feed. This entry will be displayed at the bottom of the feedburner subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-feedburner-txt`.</p>
             	<p><strong>Additional Subscriptions</strong> please donate and contact the author.</p>
          </div>

			<h3>Advance Settings</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Advance settings section is for you to be able to customize your website without having to edit the theme files and worry about the theme updates. This section saves your Styles and Scripts to the database. You can easily update your themes and keep your customizations.</p>
            	<p><strong>Custom Style</strong> is where you enter your custom style in css. No need to add &lt;style&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt-subscribe-css`.</p>
                <p><strong>Custom Script</strong> is where you enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt-subscribe-script`.</p>
                <p><strong>Custom HTML</strong> is currently NOT supported. This is where you supposedly add generated scripts like google scripts, etc. to be added inside the &lt;head&gt; of your website. Should you wish to add this feature for this plugin, please donate and contact the author.</p>
            </div>

		</div>
        
       
		<div class="tt-subscribe-admin-content" id="ts-5">
			<h2>About</h2>
			<h3>Description</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
            	<p>This plugin is a simplified subscription box that supports unlimited customization. It currently includes facebook, twitter, google plus and feedburner. Wigetized, hooked, full control and total customization, mobile friendly, responsive, new dashboard and many more features!</p>
            </div>
            
            <h3>Author</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
            	<p>Created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a>. For questions, suggestions and bug reports please go to the wordpress forums and/or contact the author.</p>
            </div>
            
            <h3>Plugin Site</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
            	<p>Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a>. Check out other plugins created by the author.</p>
            </div>
            
            <h3>Donate</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
            	<p>Donations are accepted via Paypal Donate to <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">TT Plugins</a>. Please donate to support the author in improving this plugin and in creating more useful and helpful plugins. Thank you for supporting!</p>
            </div>
            
		</div>
        
        
        </form>
        
        
        <div class="tt-subscribe-admin-footer">
        	Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
            Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
        </div>
    </div>

<?php
} // function tt_subscribe_html_page() ---- END
?>