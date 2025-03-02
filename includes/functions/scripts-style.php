<?php
function my_theme_scripts_style()
{
	//main style
	wp_enqueue_style('style', get_stylesheet_uri(), []);
	//BS5 js
	// wp_register_script('bs5-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('bs5-js');
	//swiper js
	// wp_register_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('swiper-js');
	// gsap js
	// wp_register_script('gsap-js', get_template_directory_uri() . '/assets/js/gsap.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('gsap-js');
	// Plyr js
	// wp_register_script('plyr-js', get_template_directory_uri() . '/assets/js/plyr.min.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('plyr-js');
	//theme js file
	// wp_register_script('indexjs', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('indexjs');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts_style');
