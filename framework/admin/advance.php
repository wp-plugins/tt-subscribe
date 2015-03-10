<?php // Admin > Advance Settings page

function tt_subscribe_advance_page() {
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3" class="active"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>

        <form method="post" action="options.php">
        <?php settings_fields( 'tt_subscribe_data_advance' );
			do_settings_sections( 'tt_subscribe_data_advance' ); ?>
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
        <div class="tt-subscribe-admin-footer">
        	Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
            Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
        </div>
        </form>
    </div>
<?php
} // function tt_subscribe_advance_page() ---- END
?>