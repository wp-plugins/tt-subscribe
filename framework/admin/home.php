<?php // Admin > Home page

function tt_subscribe_html_page() {
	 if ( get_option('tt-subscribe-text') == '' ) $text='currently <span class="empty">empty</span> and default'; else $text=get_option('tt-subscribe-text');
	 if ( get_option('tt-subscribe-prefix') == '' ) $prefix='currently <span class="empty">empty</span> and default'; else $prefix=get_option('tt-subscribe-prefix');
	 if ( get_option('tt-subscribe-background') == '' ) $background='currently <span class="empty">empty</span> and default'; else $background=get_option('tt-subscribe-background');
	 if ( get_option('tt-subscribe-color') == '' ) $color='currently <span class="empty">empty</span> and default'; else $color=get_option('tt-subscribe-color');
	 if ( get_option('tt-subscribe-width') == '' ) $width='currently <span class="empty">empty</span> and default'; else $width=get_option('tt-subscribe-width');
	 if ( get_option('tt-subscribe-select-facebook') == '' ) $selectfacebook='currently <span class="empty">disabled</span>'; else $selectfacebook='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-select-twitter') == '' ) $selecttwitter='currently <span class="empty">disabled</span>'; else $selecttwitter='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-select-google') == '' ) $selectgoogle='currently <span class="empty">disabled</span>'; else $selectgoogle='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-select-feedburner') == '' ) $selectfeedburner='currently <span class="empty">disabled</span>'; else $selectfeedburner='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-facebook-url') == '' ) $facebookurl='currently <span class="empty">empty</span>'; else $facebookurl=get_option('tt-subscribe-facebook-url');
	 if ( get_option('tt-subscribe-facebook-txt') == '' ) $facebooktxt='currently <span class="empty">empty</span>'; else $facebooktxt=get_option('tt-subscribe-facebook-txt');
	 if ( get_option('tt-subscribe-twitter-url') == '' ) $twitterurl='currently <span class="empty">empty</span>'; else $twitterurl=get_option('tt-subscribe-twitter-url');
	 if ( get_option('tt-subscribe-twitter-txt') == '' ) $twittertxt='currently <span class="empty">empty</span>'; else $twittertxt=get_option('tt-subscribe-twitter-txt');
	 if ( get_option('tt-subscribe-google-url') == '' ) $googleurl='currently <span class="empty">empty</span>'; else $googleurl=get_option('tt-subscribe-google-url');
	 if ( get_option('tt-subscribe-google-txt') == '' ) $googletxt='currently <span class="empty">empty</span>'; else $googletxt=get_option('tt-subscribe-google-txt');
	 if ( get_option('tt-subscribe-feedburner-url') == '' ) $feedburnerurl='currently <span class="empty">empty</span>'; else $feedburnerurl=get_option('tt-subscribe-feedburner-url');
	 if ( get_option('tt-subscribe-feedburner-txt') == '' ) $feedburnertxt='currently <span class="empty">empty</span>'; else $feedburnertxt=get_option('tt-subscribe-feedburner-txt');
	 if ( get_option('tt-subscribe-css') == '' ) $css='currently <span class="empty">empty</span>'; else $css='<span class="filled">filled</span>';
	 if ( get_option('tt-subscribe-script') == '' ) $script='currently <span class="empty">empty</span>'; else $script='<span class="filled">filled</span>';
	 if ( get_option('tt-subscribe-select-name') == '' ) $selectname='currently <span class="empty">disabled</span>'; else $selectname='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-name') == '' ) $name='currently <span class="empty">empty</span>'; else $name=get_option('tt-subscribe-name');	
	 if ( get_option('tt-subscribe-font-color') == '' ) $fontcolor='currently <span class="empty">empty</span>'; else $fontcolor=get_option('tt-subscribe-font-color');	
	 if ( get_option('tt-subscribe-font-hover') == '' ) $fonthover='currently <span class="empty">empty</span>'; else $fonthover=get_option('tt-subscribe-font-hover');	
	 if ( get_option('tt-subscribe-font-active') == '' ) $fontactive='currently <span class="empty">empty</span>'; else $fontactive=get_option('tt-subscribe-font-active');	
	 if ( get_option('tt-subscribe-select-instagram') == '' ) $selectinstagram='currently <span class="empty">disabled</span>'; else $selectinstagram='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-instagram-url') == '' ) $instagramurl='currently <span class="empty">empty</span>'; else $instagramurl=get_option('tt-subscribe-instagram-url');
	 if ( get_option('tt-subscribe-instagram-txt') == '' ) $instagramtxt='currently <span class="empty">empty</span>'; else $instagramtxt=get_option('tt-subscribe-instagram-txt');
	 if ( get_option('tt-subscribe-select-youtube') == '' ) $selectyoutube='currently <span class="empty">disabled</span>'; else $selectyoutube='<span class="filled">enabled</span>';
	 if ( get_option('tt-subscribe-youtube-url') == '' ) $youtubeurl='currently <span class="empty">empty</span>'; else $youtubeurl=get_option('tt-subscribe-youtube-url');
	 if ( get_option('tt-subscribe-youtube-txt') == '' ) $youtubetxt='currently <span class="empty">empty</span>'; else $youtubetxt=get_option('tt-subscribe-youtube-txt');
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe</h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <li id="ts0" class="active"><a href="?page=tt-subscribe">Home</a></li>
                <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
                <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
                <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            </ul>
        </div>
        
        <div class="tt-subscribe-admin-content" id="ts-0">
			<h2>Welcome to the TT Subscribe plugin.</h2>
            <br />
            
            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Please select the following to proceed:</h3>
                <ol>
                    <li><a href="?page=tt-subscribe">Home</a></li>
                    <li><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
                    <li><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
                    <li><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
                    <li><a href="?page=tt-subscribe-support">Support</a></li>
                    <li><a href="?page=tt-subscribe-about">About</a></li>
                    <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
               </ol>
            </div>
            
            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Basic Settings</h3>
                <ol>
                    <li>Header Text is <?=$text?>.</li>
                    <li>Prefix Text is <?=$prefix?>.</li>
                    <li>Custom Name is <?=$selectname?>.
                    	<?php if( get_option('tt-subscribe-select-name') != '' ) { ?>
                            <ol>
                                <li>Custom Name is <?=$name?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Background Color is <?=$background?>.</li>
                    <li>Text Color is <?=$color?>.</li>
                    <li>Width is <?=$width?>.</li>
                    <li>Icon Color is <?=$fontcolor?>.</li>
                    <li>Icon Hover Color is <?=$fonthover?>.</li>
                    <li>Icon Active Color is <?=$fontactive?>.</li>
               </ol>
            </div>

            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Subscriptions Settings</h3>
                <ol>
                    <li>Facebook is <?=$selectfacebook?>.
                    	<?php if( get_option('tt-subscribe-select-facebook') != '' ) { ?>
                            <ol>
                                <li>Facebook URL is <?=$facebookurl?>.</li>
                                <li>Facebook Text is <?=$facebooktxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Twitter is <?=$selecttwitter?>.
                    	<?php if( get_option('tt-subscribe-select-twitter') != '' ) { ?>
                            <ol>
                                <li>Twitter URL is <?=$twitterurl?>.</li>
                                <li>Twitter Text is <?=$twittertxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Youtube is <?=$selectyoutube?>.
                    	<?php if( get_option('tt-subscribe-select-youtube') != '' ) { ?>
                            <ol>
                                <li>Youtube URL is <?=$youtubeurl?>.</li>
                                <li>Youtube Text is <?=$youtubetxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Instagram is <?=$selectinstagram?>.
                    	<?php if( get_option('tt-subscribe-select-instagram') != '' ) { ?>
                            <ol>
                                <li>Instagram URL is <?=$instagramurl?>.</li>
                                <li>Instagram Text is <?=$instagramtxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Google+ is <?=$selectgoogle?>.
                    	<?php if( get_option('tt-subscribe-select-google') != '' ) { ?>
                            <ol>
                                <li>Google+ URL is <?=$googleurl?>.</li>
                                <li>Google+ Text is <?=$googletxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
                    <li>Feedburner is <?=$selectfeedburner?>.
                    	<?php if( get_option('tt-subscribe-select-feedburner') != '' ) { ?>
                            <ol>
                                <li>Feedburner URL is <?=$feedburnerurl?>.</li>
                                <li>Feedburner Text is <?=$feedburnertxt?>.</li>
                            </ol>
						<?php } ?>
                    </li>
               </ol>
            </div>
            
            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Advance Settings</h3>
                <ol>
                    <li>Custom Style is <?=$css?>.</li>
                    <li>Custom Script is <?=$script?>.</li>
               </ol>
            </div>

             <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Widget</h3>
                <ol>
                	<li>TT-Subscribe widget is available.</li>
                	<li>Click <a href="widgets.php">here</a> to set up your widgets.</li>
                </ol>
			</div>

            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Shortcode</h3>
                <ol>
                	<li>Shortcode is [tt_subscribe]</li>
                	<li>Add shortcode anywhere.</li>
                </ol>
			</div>
            
            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Default Settings</h3>
                <ol>
                    <li>Header Text is Grab the Latest Issue Now.</li>
                    <li>Prefix Text is Follow.</li>
                    <li>Sitename is <?=$GLOBALS['sitename']?>.</li>
                    <li>Custom Name is disabled.</li>
                    <li>Background Color is 2ea2cc.</li>
                    <li>Text Color is ffffff.</li>
                    <li>Width is 280.</li>
               </ol>
            </div>
            
            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Rate Plugin</h3>
                <p>Click <a href="https://wordpress.org/plugins/tt-subscribe/" target="_blank">here</a> to rate this plugin now.</p>
            </div>


            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>Support</h3>
				<p>All detailed information you need is in the support section. Click <a href="?page=tt-subscribe-support">here</a> to navigate to support section now.</p>
            </div>

            <div class="tt-subscribe-admin-section tt-subscribe-admin-home">
                <h3>About</h3>
				<p>All detailed information about the plugin and the author is in the about section. Click <a href="?page=tt-subscribe-about">here</a> to navigate to about section now. Click <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">here</a> to donate to the author now.</p>
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
} // function tt_subscribe_html_page() ---- END
?>