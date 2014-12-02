<?php /* widget page */

class tt_subscribe_widget extends WP_Widget {
	
	public function __construct() {
		// widget actual processes
		parent::__construct(
	 		'tt_subscribe_widget', // Base ID
			'TT-Subscribe', // Name
			array( 'description' => __( 'Attach TT-Subscribe to your website by using this widget!', 'text_domain' ), ) );
	}

	public function widget($args) {
		// outputs the content of the widget
		  extract($args);
		  echo $before_widget;
		  tt_subscribe(); // call tt_subscribe function
		  echo $after_widget;
	}
	
	public function form() {
		// outputs the options form on admin
		?>
		<p><?php _e( 'Options are found in TT-Subscribe Settings.' ); ?></p>
		<?php 
	}
}

add_action('widgets_init', create_function('', 'return register_widget("tt_subscribe_widget");'));

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
	
	$width_outer = $width;
	if(isset($width_outer)) $width_outer; else $width_outer=280;
	$width_inner = $width;
	if(isset($width_inner)) $width_inner-=20; else $width_inner=260;
	
	$facebook_urlencode = urlencode($facebook_url);
	$twitter_tag = substr($twitter_url,24); // https://www.twitter.com/ = 23char 
	$twitter_tag = '@'.$twitter_tag;
?>
    <div id="tt-subscribe">
        <div id="tt-subscribe-header">
            <h1><span id="h1up"><?=$text; ?></span><br /><?=$prefix; ?> <?php bloginfo( $show ); ?></h1>
            <div id="tt-subscribe-icons">
				<?php if( $facebook_icon != false) { ?>
                    <div id="tt-subscribe-facebook"></div>
				<?php } if( $twitter_icon != false) { ?>
                    <div id="tt-subscribe-twitter"></div>
				<?php } if( $google_icon != false) { ?>
                    <div id="tt-subscribe-google"></div>
				<?php } if( $feedburner_icon != false) { ?>
                      <div id="tt-subscribe-feedburner"></div>
				<?php } ?>
            </div>
        </div>
        <div id="tt-subscribe-area">
        	<?php if( $facebook_icon != false) { ?>
                <div id="tt-subscribe-area-facebook">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?=$facebook_urlencode; ?>&amp;send=false&amp;layout=standard&amp;width=<?=$width_inner; ?>&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?=$width_inner; ?>px; height:65px;" allowTransparency="true"></iframe>
	                <a href="<?=$facebook_url; ?>" alt="<?=$facebook_text; ?>"><?=$facebook_txt; ?></a>
                </div>
            <?php 
			} 
			if( $twitter_icon != false) { ?>
                <div id="tt-subscribe-area-twitter">
                    <a href="<?=$twitter_url; ?>" class="twitter-follow-button" data-width="<?=$width_inner; ?>px" data-show-screen-name="true" data-show-count="true" data-lang="en">Follow <?=$twitter_tag; ?></a>
                    <a href="<?=$twitter_url; ?>" alt="<?=$twitter_txt; ?>"><?=$twitter_txt; ?></a>
                    
                </div>
            <?php 
			} 
			if( $google_icon != false) { ?>
                <div id="tt-subscribe-area-google">
                    <div class="g-plusone" data-annotation="inline" data-width="<?=$width_inner; ?>" data-href="<?=$google_url; ?>"></div>
                    <a href="<?=$google_url; ?>" alt="<?=$google_txt; ?>"><?=$google_txt; ?></a>
                </div>
            <?php 
			} 
			if( $feedburner_icon != false) { ?>
                <div id="tt-subscribe-area-feedburner">
                   <a href="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" alt="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>"><?php echo get_option('tt-subscribe-feedburner-txt'); ?></a>
                </div>
            <?php } ?>
    	</div>
	</div>
<?php
}
?>