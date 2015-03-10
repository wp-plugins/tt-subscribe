<?php /* Widget Basic and Advance Settings */
	$background = get_option( 'tt-subscribe-background' );
	$color = get_option( 'tt-subscribe-color' );
	$width = get_option( 'tt-subscribe-width' );
	$css = get_option( 'tt-subscribe-css' );
	$script = get_option( 'tt-subscribe-script' );
	$fonticons = get_option( 'tt-subscribe-select-font-icons');
	$fontcolor = get_option( 'tt-subscribe-font-color' );
	$fonthover = get_option( 'tt-subscribe-font-hover' );
	$fontactive = get_option( 'tt-subscribe-font-active' );
	
	$width_outer = $width;
	if(!empty($width_outer)) $width_outer; else $width_outer=280;
	$width_inner = $width;
	if(!empty($width_inner)) $width_inner-=20; else $width_inner=260;
?>
<?php /* Google+ Script */ ?>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php /* Twitter Script */?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>                    
<?php /* Widget Style */?>
<style>
div#tt-subscribe, #tt-subscribe-icons { width: <?=$width_outer; ?>px; }
#tt-subscribe-header { background: #<?=$background; ?>!important; color: #<?=$color; ?>; }
#tt-subscribe h1 { color: #<?=$color; ?>!important; }
.tt-susbscribe-areaselect { width: <?=$width_inner; ?>px; }
#tt-subscribe-area { border-bottom: 1px solid #<?=$background; ?>; }
.tt-susbscribe-iconselect { color: #<?=$fontcolor; ?>; }
.tt-susbscribe-iconselect:hover { color: #<?=$fonthover; ?>; }
.tt-susbscribe-active { color: #<?=$fontactive; ?>; }
.tt-susbscribe-active:hover {  color: #<?=$fonthover; ?>;}
/** RESPONSIVE AREA **/
@media (max-width: <?=$width; ?>px) {	
div#tt-subscribe{ width: 90%; }
#tt-subscribe-icons, #tt-subscribe-area-facebook a, #tt-subscribe-area-twitter a, #tt-subscribe-area-google a, #tt-subscribe-area-feedburner a { width: 100%; } 
#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-google, #tt-subscribe-area-feedburner { width: 95%; }
#tt-subscribe-area-facebook iframe, #tt-subscribe-area-twitter iframe, #tt-subscribe-area-google iframe, #tt-subscribe-area-feedburner iframe { width: 100%!important; }
}
@media (max-width: 349px) {	
div#tt-subscribe{ width: 90%; }
#tt-subscribe-icons, #tt-subscribe-area-facebook a, #tt-subscribe-area-twitter a, #tt-subscribe-area-google a, #tt-subscribe-area-feedburner a { width: 100%; } 
#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-google, #tt-subscribe-area-feedburner { width: 95%; }
#tt-subscribe-area-facebook iframe, #tt-subscribe-area-twitter iframe, #tt-subscribe-area-google iframe, #tt-subscribe-area-feedburner iframe { width: 100%!important; }
}
<?php if( !empty($css) ) $css; ?>
</style>
<?php if( !empty($script) ) { ?>
<script>
<?=$script; ?>
</script>
<?php } ?>