<?php
function theme_setup()
{

	if (function_exists('add_theme_support')) {
		add_theme_support('post-thumbnails', array('post', 'page', 'products'));
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'search-form',
			'gallery',
			'caption',
			'widgets',
		));
		add_theme_support('customize-selective-refresh-widgets');
		// add_theme_support('post-formats', array('image', 'video', 'quote'));
		// add_theme_support('automatic-feed-links');
		add_theme_support('rank-math-breadcrumbs');
	}
}
add_action('after_setup_theme', 'theme_setup');
