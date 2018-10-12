<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'divi', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i', false );
		//wp_enqueue_style( 'cloud-typo-gotham', '' );
		//wp_enqueue_script( 'divi', get_template_directory_uri() . '-child/js/scripts.js', array( 'jquery', 'divi-custom-script' ), true );
	}

	/* Remove category from category widget */
	function dtwd_exclude_widget_category($args){
		$exclude = "108, 1"; // IDs of excluding categories (108 = Careers, 1 = Non classé)
		$args["exclude"] = $exclude;
		return $args;
	}
	add_filter("widget_categories_args","dtwd_exclude_widget_category");
?>
