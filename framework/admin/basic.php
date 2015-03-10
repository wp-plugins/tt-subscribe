<?php // Admin > Basic Settings page

function tt_subscribe_basic_page() {
	tt_subscribe_selection();
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1" class="active"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>

        <form method="post" action="options.php">
        <?php settings_fields( 'tt_subscribe_data_basic' );
			do_settings_sections( 'tt_subscribe_data_basic' ); ?>
        <div class="tt-subscribe-admin-content" id="ts-1">
            <h2>Basic Settings</h2>
            <?php submit_button(); ?>
            <div id="tt-subscribe-admin-panel">
                <h3>Texts</h3>
                
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
               
                <div id="tt-subscribe-admin-selection2">                
                    <label for="tt-subscribe-select-name">Enable/Disable<br />Custom Name</label>
                    <input name="tt-subscribe-select-name" type="checkbox" value="select-name" <?php checked( get_option('tt-subscribe-select-name') == 'select-name' ); ?> /> 
                    <p>(ex. Enabling this will replace your sitename which is currently "<?=$GLOBALS['sitename']?>")</p>
				</div>
                
                <div id="tt-subscribe-admin-name" class="tt-subscribe-admin-subdivs2">
                    <div>
                       <label for="tt-subscribe-name">Custom Name</label>
                        <input name="tt-subscribe-name" type="text" value="<?php echo get_option('tt-subscribe-name'); ?>" />
                        <p>(ex. Replace your sitename with this custom name)</p>
                    </div>
                </div>

                <h3>Looks</h3>
                <div>
	                <label for="tt-subscribe-background">Background Color</label>
                    <input name="tt-subscribe-background" type="text" value="<?php echo get_option('tt-subscribe-background'); ?>" />
                    <p>(ex. 2ea2cc, original background color settings)</p>
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
                
                <h3>Icons</h3>
                <div>
                    <label for="tt-subscribe-font-color">Icon Color</label>
                    <input name="tt-subscribe-font-color" type="text" value="<?php echo get_option('tt-subscribe-font-color'); ?>" />
                    <p>(ex. ffffff, original font icon color settings)</p>
                </div>
                <div>
                    <label for="tt-subscribe-font-hover">Icon Hover Color</label>
                    <input name="tt-subscribe-font-hover" type="text" value="<?php echo get_option('tt-subscribe-font-hover'); ?>" />
                    <p>(ex. 005979, original font icon hover color settings)</p>
                </div>
                <div>
                    <label for="tt-subscribe-font-active">Icon Active Color</label>
                    <input name="tt-subscribe-font-active" type="text" value="<?php echo get_option('tt-subscribe-font-active'); ?>" />
                    <p>(ex. 91DCF7, original font icon hover color settings)</p>
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
} // function tt_subscribe_basic_page() ---- END
?>