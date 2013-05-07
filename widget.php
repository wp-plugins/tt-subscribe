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

?>