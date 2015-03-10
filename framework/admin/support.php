<?php // Admin > Support page

function tt_subscribe_support_page() {
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4" class="active"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>
        
		<div class="tt-subscribe-admin-content" id="ts-4">
			<h2>Support</h2>
            
			<h3>Widget</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>The widget can be displayed anywhere in your website.</p>
            	<p><strong>TT-Subscribe</strong> widget can be found in <strong>Dashboard > Appearance > Widgets</strong> and look for <strong>TT-Subscribe</strong> in the <strong>Available Widgets</strong> section. Click <a href="widgets.php">here</a> to set up your widgets now.</p>
                <p><strong>Shortcodes</strong> can be used if you wish to display this widget on different areas of your website or theme. Shortcode is <strong>[tt_subscribe]</strong>.</p>
            </div>

			<h3>Basic Settings</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Basic settings section is for you to input the most basic information you will need to get this plugin up and running.</p>
            	<p><strong>Header Text</strong> is where you enter the title that will be displayed on the widget. The default text for this entry will be displayed in uppercased in the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-text`.</p>
            	<p><strong>Prefix Text</strong> is where you enter the prefix title that will be followed by your wesbite name which is currently: <strong><?=$GLOBALS['sitename']?></strong>. The default text for this entry will be displayed in uppercased in the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-prefix`.</p>
            	<p><strong>Enable/Disable Custom Name</strong>. Check the box if you wish to replace your website name on the widget header. Uncheck the checkbox if you wish to display the default setting. The default setting is your website name, currently: <strong><?=$GLOBALS['sitename']?></strong> .</p>
            	<p><strong>Custom Name</strong> is where you enter a custom text to display in the header section of the widget. The default text for this entry will be displayed in uppercased in the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-name`.</p>
            	<p><strong>Background Color</strong> is where you enter the hex number of the color that you want to be displayed as the background color of the widget's title. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-background`.</p>
            	<p><strong>Text Color</strong> is where you enter the hex number of the color that you want to be displayed as the text color of the widget's title. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-color`.</p>
             	<p><strong>Width</strong> is where you enter the number in pixels of the width you want for your widget. Please do not include the pixel code, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-width`.</p>
            	<p><strong>Icon Color</strong> is where you enter the hex number of the color that you want on the social media icons of the widget. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-font-color`.</p>
            	<p><strong>Icon Hover Color</strong> is where you enter the hex number of the hover effect color that you want on the social media icons of the widget. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-font-hover`.</p>
            	<p><strong>Icon Active Color</strong> is where you enter the hex number of the active effect color that you want on the social media icons of the widget. Please do not include the hastag, for it will not be read by the widget. If you wish to add this to your theme, the custom option is `tt-subscribe-font-active`.</p>
           </div>
			<h3>Subscriptions</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Subscription section is for you to select which subscription you want to display on your widget. Social media information will be stored here.</p>
             	<p><strong>Enable/Disable Subscriptions</strong>. Check the box if you wish the subscription to be displayed to your website. Uncheck the checkbox if you wish to disable the display.</p>
            	<p><strong>Facebook URL</strong> is the url of your facebook fanpage or profile. If you wish to add this to your theme, the custom option is `tt-subscribe-facebook-url`.</p>
            	<p><strong>Facebook Text</strong> is where you enter the call to action text for your facebook fanpage or profile. This entry will be displayed at the bottom of the facebook subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-facebook-txt`.</p>
            	<p><strong>Twitter URL</strong> is the url of your twitter profile. If you wish to add this to your theme, the custom option is `tt-subscribe-twitter-url`.</p>
            	<p><strong>Twitter Text</strong> is where you enter the call to action text for your twitter profile. This entry will be displayed at the bottom of the twitter subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-twitter-txt`.</p>
            	<p><strong>Youtube URL</strong> is the url of your youtube channel. If you wish to add this to your theme, the custom option is `tt-subscribe-youtube-url`.</p>
            	<p><strong>Youtube Text</strong> is where you enter the call to action text for your youtube channel. This entry will be displayed at the bottom of the youtube subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-youtube-txt`.</p>
            	<p><strong>Instagram URL</strong> is the url of your instagram profile. If you wish to add this to your theme, the custom option is `tt-subscribe-instagram-url`.</p>
            	<p><strong>Instagram Text</strong> is where you enter the call to action text for your instagram profile. This entry will be displayed at the bottom of the instagram subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-instagram-txt`.</p>
            	<p><strong>Google+ URL</strong> is the url of your google+ page or profile. If you wish to add this to your theme, the custom option is `tt-subscribe-google-url`.</p>
            	<p><strong>Google+ Text</strong> is where you enter the call to action text for your google page or profile. This entry will be displayed at the bottom of the google subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-google-txt`.</p>
            	<p><strong>Feedburner URL</strong> is the url of your feedburner feed. Any RSS url can be accepted here. If you wish to add this to your theme, the custom option is `tt-subscribe-feedburner-url`.</p>
            	<p><strong>Feedburner Text</strong> is where you enter the call to action text for your feedburner feed. This entry will be displayed at the bottom of the feedburner subscription box. If you wish to add this to your theme, the custom option is `tt-subscribe-feedburner-txt`.</p>
             	<p><strong>Additional Subscriptions</strong> please <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">donate</a> and <a href="?page=tt-subscribe-about">contact</a> the author.</p>
          </div>

			<h3>Advance Settings</h3>
            <div class="tt-subscribe-admin-section tt-subscribe-admin-support">
            	<p>Advance settings section is for you to be able to customize your website without having to edit the theme files and worry about the theme updates. This section saves your Styles and Scripts to the database. You can easily update your themes and keep your customizations.</p>
            	<p><strong>Custom Style</strong> is where you enter your custom style in css. No need to add &lt;style&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt-subscribe-css`.</p>
                <p><strong>Custom Script</strong> is where you enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt-subscribe-script`.</p>
                <p><strong>Custom HTML</strong> is currently NOT supported. This is where you supposedly add generated scripts like google scripts, etc. to be added inside the &lt;head&gt; of your website. Should you wish to add this feature for this plugin, please <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">donate</a> and <a href="?page=tt-subscribe-about">contact</a> the author.</p>
            </div>

		</div>
        <div class="tt-subscribe-admin-footer">
        	Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
            Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
        </div>
    </div>
<?php
} // function tt_subscribe_support_page() ---- END
?>