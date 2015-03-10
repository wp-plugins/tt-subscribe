<?php //tt_subscribe widget function

function tt_subscribe() {
	$text = get_option( 'tt-subscribe-text' );
	$prefix = get_option( 'tt-subscribe-prefix' );
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
	$selectname = get_option( 'tt-subscribe-select-name' );
	$name = get_option( 'tt-subscribe-name' );
	$fonticons = get_option( 'tt-subscribe-select-font-icons');
	$instagram_icon = get_option( 'tt-subscribe-select-instagram');
	$instagram_url = get_option( 'tt-subscribe-instagram-url' );
	$instagram_txt = get_option( 'tt-subscribe-instagram-txt' );
	$youtube_icon = get_option( 'tt-subscribe-select-youtube');
	$youtube_url = get_option( 'tt-subscribe-youtube-url' );
	$youtube_txt = get_option( 'tt-subscribe-youtube-txt' );
	
	$width_outer = $width;
	if(!empty($width_outer)) $width_outer; else $width_outer=280;
	$width_inner = $width;
	if(!empty($width_inner)) $width_inner-=20; else $width_inner=260;
	
	if(empty($text)) $text = 'grab the latest issue now';
	if(empty($prefix)) $prefix = 'follow';
	if( $selectname !=false) $name; else $name = get_bloginfo( 'name' );
	
	if(!empty($facebook_url)) $facebook_urlencode = urlencode($facebook_url);
	if(!empty($twitter_url)) {
		$twittertag = explode('.com/',$twitter_url);
		$twitter_tag = $twittertag[1];
		$twitter_tag = 'Follow @'.$twitter_tag;
	}
	if(!empty($youtube_url)) {
		$youtubeid = explode('channel/',$youtube_url);
		$youtube_id = $youtubeid[1];
	}
	
	//fa-youtube
?>
    <div id="tt-subscribe">
        <div id="tt-subscribe-header">
            <h1><span id="h1up"><?=$text; ?></span><br /><?=$prefix; ?> <?=$name; ?></h1>
            <?php // if( $fonticons != false ) {?>
            <div id="tt-subscribe-icons">
				<?php if( $facebook_icon != false) { ?>
                    <div id="tt-subscribe-facebook" class="tt-susbscribe-iconselect">
                    	<div class="fa fa-facebook tt-susbscribe-show"></div>
                        <div class="fa fa-facebook-square tt-susbscribe-hide"></div>
                    </div>
				<?php } if( $twitter_icon != false) { ?>
                    <div id="tt-subscribe-twitter" class="tt-susbscribe-iconselect">
                        <div class="fa fa-twitter tt-susbscribe-show"></div>
                        <div class="fa fa-twitter-square tt-susbscribe-hide"></div>
                    </div>
				<?php } if( $youtube_icon != false) { ?>
                    <div id="tt-subscribe-youtube" class="tt-susbscribe-iconselect">
                        <div class="fa fa-youtube tt-susbscribe-show"></div>
                        <div class="fa fa-youtube-square tt-susbscribe-hide"></div>
                    </div>
				<?php } if( $instagram_icon != false) { ?>
                    <div id="tt-subscribe-instagram" class="tt-susbscribe-iconselect">
                        <div class="fa fa-instagram tt-susbscribe-show"></div>
                        <div class="fa fa-instagram tt-susbscribe-hide"></div>
                    </div>
				<?php } if( $google_icon != false) { ?>
                    <div id="tt-subscribe-google" class="tt-susbscribe-iconselect">
                        <div class="fa fa-google-plus tt-susbscribe-show"></div>
                        <div class="fa fa-google-plus-square tt-susbscribe-hide"></div>
                    </div>
				<?php } if( $feedburner_icon != false) { ?>
                      <div id="tt-subscribe-feedburner" class="tt-susbscribe-iconselect">
                          <div class="fa fa-rss tt-susbscribe-show"></div>
                          <div class="fa fa-rss-square tt-susbscribe-hide"></div>
                      </div>
				<?php } ?>
            </div>
        </div>
        <div id="tt-subscribe-area">
        	<?php if( $facebook_icon != false) { ?>
                <div id="tt-subscribe-area-facebook" class="tt-susbscribe-areaselect">
                    <iframe src="//www.facebook.com/plugins/follow.php?href=<?=$facebook_urlencode; ?>&amp;width=<?=$width_inner; ?>&amp;height=65&amp;colorscheme=light&amp;layout=standard&amp;show_faces=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?=$width_inner; ?>px; height:65px;" allowTransparency="true"></iframe>
	                <a href="<?=$facebook_url; ?>" alt="<?=$facebook_text; ?>" target="_blank"><?=$facebook_txt; ?></a>
                </div>
            <?php 
			} 
			if( $twitter_icon != false) { ?>
                <div id="tt-subscribe-area-twitter" class="tt-susbscribe-areaselect">
                    <a href="<?=$twitter_url; ?>" class="twitter-follow-button" data-width="<?=$width_inner; ?>px" data-show-screen-name="true" data-show-count="true" data-lang="en"><?=$twitter_tag; ?></a>
                    <a href="<?=$twitter_url; ?>" alt="<?=$twitter_txt; ?>" target="_blank"><?=$twitter_txt; ?></a>
                </div>
            <?php 
			} 
			if( $youtube_icon != false) { ?>
                <div id="tt-subscribe-area-youtube" class="tt-susbscribe-areaselect">
					<script src="https://apis.google.com/js/platform.js"></script>
                    <div class="g-ytsubscribe" data-channelid="<?=$youtube_id; ?>" data-layout="default" data-count="default"></div>
                    <a href="<?=$youtube_url; ?>" alt="<?=$youtube_txt; ?>" target="_blank"><?=$youtube_txt; ?></a>
                </div>
            <?php 
			} 
			if( $instagram_icon != false) { ?>
                <div id="tt-subscribe-area-instagram" class="tt-susbscribe-areaselect">
                    <a href="<?=$instagram_url; ?>?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
                    <a href="<?=$instagram_url; ?>" alt="<?=$instagram_txt; ?>"><?=$instagram_txt; ?></a>
                </div>
            <?php 
			} 
			if( $google_icon != false) { ?>
                <div id="tt-subscribe-area-google" class="tt-susbscribe-areaselect">
                    <div class="g-plusone" data-annotation="inline" data-width="<?=$width_inner; ?>" data-href="<?=$google_url; ?>"></div>
                    <a href="<?=$google_url; ?>" alt="<?=$google_txt; ?>" target="_blank"><?=$google_txt; ?></a>
                </div>
            <?php 
			} 
			if( $feedburner_icon != false) { ?>
                <div id="tt-subscribe-area-feedburner" class="tt-susbscribe-areaselect">
                   <a href="<?=$feedburner_url; ?>" alt="<?=$feedburner_txt; ?>" target="_blank"><?=$feedburner_txt; ?></a>
                </div>
            <?php } ?>
    	</div>
	</div>
<?php
}
?>