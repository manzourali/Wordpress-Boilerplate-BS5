<?php
function register_my_menus()
{
	register_nav_menus(
		array(
			'first_menu'  => "Header",
			'second_menu' => "Footer B1",
			'third_menu'  => "Footer B2",
			'fourth_menu' => "Free",
			// 'fifth_menu' => "Footer c4",
			// 'sixth_menu' => "Footer Bottom"
		)
	);
}
add_action('init', 'register_my_menus');
