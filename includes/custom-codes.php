<?php 
	$background = get_option( 'tt-subscribe-background' );
	$color = get_option( 'tt-subscribe-color' );
	$width = get_option( 'tt-subscribe-width' );
	$css = get_option( 'tt-subscribe-css' );
	$script = get_option( 'tt-subscribe-script' );
	
	$width_outer = $width;
	if(isset($width_outer)) $width_outer; else $width_outer=280;
	$width_inner = $width;
	if(isset($width_inner)) $width_inner-=20; else $width_inner=260;
?>
<?php /* Google+ Script */?>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php /* Twitter Script */?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>                    
<style>
div#tt-subscribe, #tt-subscribe-icons { width: <?=$width_outer; ?>px; }
#tt-subscribe-header { background: #<?=$background; ?>!important; color: #<?=$color; ?>; }
#tt-subscribe h1 { color: #<?=$color; ?>; }
#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-feedburner, #tt-subscribe-area-google {
	 width: <?=$width_inner; ?>px;
}
/** RESPONSIVE AREA **/
@media (max-width: <?=$width; ?>px) {	
div#tt-subscribe{ width: 90%; }
#tt-subscribe-icons, #tt-subscribe-area-facebook a, #tt-subscribe-area-twitter a, #tt-subscribe-area-google a, #tt-subscribe-area-feedburner a { width: 100%; } 
#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-google, #tt-subscribe-area-feedburner { width: 95%; }
#tt-subscribe-area-facebook iframe, #tt-subscribe-area-twitter iframe, #tt-subscribe-area-google iframe, #tt-subscribe-area-feedburner iframe { width: 100%!important; }
}

<?=$css; ?>
</style>
<script>
<?=$script; ?>
</script>
