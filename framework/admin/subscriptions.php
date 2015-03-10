<?php // Admin > Subscriptions page

function tt_subscribe_subscriptions_page() {
	tt_subscribe_selection();
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2" class="active"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>

        <form method="post" action="options.php">
        <?php settings_fields( 'tt_subscribe_data_subscription' );
			do_settings_sections( 'tt_subscribe_data_subscription' ); ?>
        <div class="tt-subscribe-admin-content" id="ts-2">
            <h2>Subscription Settings</h2>
            <?php submit_button(); ?>
            <div id="tt-subscribe-admin-select">
                <h3>Enable/Disable Subscriptions</h3>
                <div id="tt-subscribe-admin-selection">                
                    <label for="tt-subscribe-select-facebook">Facebook:</label>
                    <input name="tt-subscribe-select-facebook" type="checkbox" value="select-facebook" <?php checked( get_option('tt-subscribe-select-facebook') == 'select-facebook' ); ?> /> 
                    <label for="tt-subscribe-select-twitter">Twitter:</label>
                    <input name="tt-subscribe-select-twitter" type="checkbox" value="select-twitter" <?php checked( get_option('tt-subscribe-select-twitter') == 'select-twitter' ); ?> /> 
                    <label for="tt-subscribe-select-youtube">Youtube:</label>
                    <input name="tt-subscribe-select-youtube" type="checkbox" value="select-youtube" <?php checked( get_option('tt-subscribe-select-youtube') == 'select-youtube' ); ?> /> 
                    <label for="tt-subscribe-select-instagram">Instagram:</label>
                    <input name="tt-subscribe-select-instagram" type="checkbox" value="select-instagram" <?php checked( get_option('tt-subscribe-select-instagram') == 'select-instagram' ); ?> /> 
                    <label for="tt-subscribe-select-google">Google+:</label>
                    <input name="tt-subscribe-select-google" type="checkbox" value="select-google" <?php checked(get_option('tt-subscribe-select-google') == 'select-google' ); ?> /> 
                    <label for="tt-subscribe-select-feedburner">Feedburner:</label>
                    <input name="tt-subscribe-select-feedburner" type="checkbox" value="select-feedburner" <?php checked( get_option('tt-subscribe-select-feedburner') == 'select-feedburner' ); ?> />
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
             
            <div id="tt-subscribe-admin-youtube" class="tt-subscribe-admin-subs">
                <h3>Youtube:</h3>
                
                <div>
                <label for="tt-subscribe-youtube-url">Youtube URL</label>
                <input name="tt-subscribe-youtube-url" type="text" id="tt-subscribe-youtube-url" value="<?php echo get_option('tt-subscribe-youtube-url'); ?>" />
                <p>(ex. https://www.youtube.com/channel/UCSV798csyfp4hkVzFvO-LBw)</p>
                </div>
                
                <div>
                <label for="tt-subscribe-youtube-txt">Youtube Text</label>
                <input name="tt-subscribe-youtube-txt" type="text" id="tt-subscribe-youtube-txt" value="<?php echo get_option('tt-subscribe-youtube-txt'); ?>" />
                <p>(ex. Follow me on Youtube!)</p>
                </div>
            </div>
            
            <div id="tt-subscribe-admin-instagram" class="tt-subscribe-admin-subs">
                <h3>Instagram:</h3>
                
                <div>
                <label for="tt-subscribe-instagram-url">Instagram URL</label>
                <input name="tt-subscribe-instagram-url" type="text" id="tt-subscribe-instagram-url" value="<?php echo get_option('tt-subscribe-instagram-url'); ?>" />
                <p>(ex. https://www.instagram.com/thesabeltuto)</p>
                </div>
                
                <div>
                <label for="tt-subscribe-instagram-txt">Instagram Text</label>
                <input name="tt-subscribe-instagram-txt" type="text" id="tt-subscribe-instagram-txt" value="<?php echo get_option('tt-subscribe-instagram-txt'); ?>" />
                <p>(ex. Follow me on Instagram!)</p>
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
        <div class="tt-subscribe-admin-footer">
        	Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
            Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
        </div>
        </form>
    </div>
<?php
}  // function tt_subscribe_subscription_page() ---- END
?>