<?php
// Register Sidebar
function register_the_sidebar()
{
    register_sidebar(array(
        'name' => "Newsletter Home",
        'id' => 'newsletter',
        'description' => 'newsletter home shortcode',
        'class' => '',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => ' ',
        'after_widget' => ' '
    ));
}
// add_action('widgets_init', 'register_the_sidebar');
