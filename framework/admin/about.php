<?php // Admin > About page

function tt_subscribe_about_page() {
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5" class="active"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>
		<div class="tt-subscribe-admin-content" id="ts-5">
			<h2>About</h2>
			<h3>Description</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
            	<p>Simple, minimal, customizable, responsive and mobile-ready social media subscription box.
                Includes only the latest and major social media networks according to Forbes namely Facebook, Twitter, Youtube, Instagram, Google+ and Feedburner.
                Widget and shortcode ready.
                Nothing can go wrong with your social media subscription box with the all new dashboard settings and support.
                You can change the skin and looks of your subscription box. You can even add additional functionalities and scriptings with this plugin.
                </p>
            </div>
            
			<h3>Specials</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
                <p>Includes Font Awesome for customizable social media icons. Thank you <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a>.</p>
            </div>
            
            <h3>Rate Plugin</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-about">
                <p>Please do rate this plugin <a href="https://wordpress.org/plugins/tt-subscribe/" target="_blank">here</a>. Thank you!</p>
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
            	<p>Donations are accepted via Paypal Donate to <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">TT Plugins</a>. Please donate to support the author in improving this plugin and in creating more useful and helpful plugins. Thank you for supporting!</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                <br />
            </div>
            
		</div>
        <div class="tt-subscribe-admin-footer">
        	Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
            Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
        </div>
	</div>
<?php
} // function tt_subscribe_about_page() ---- END
?>