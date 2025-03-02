<?php
// Config
require_once('includes/config.php');
// Theme Support
include_once('includes/functions/theme-support.php');
// enqueue scripts and styles
include_once('includes/functions/scripts-style.php');
// image crop
// add_image_size('portfolio_thumb', 500, 500);
// Register Menus
include_once('includes/functions/register-menus.php');
// Disable File Edit
// set it to true when you need to edit robots.txt in rank math panel
define('DISALLOW_FILE_EDIT', true);
// Register Sidebar
include_once('includes/functions/widgets.php');
// remove pre-title from titles
include_once('includes/functions/remove-pre-title.php');
// more
include_once('includes/functions/excerpt.php');
// pagination
include_once('includes/functions/pagination.php');
// upload_mimes
include_once('includes/functions/upload_mimes.php');
// Add shortcode feature to widgets & content
add_filter('widget_text', 'do_shortcode');
add_filter('the_content', 'do_shortcode');
// disable xmlrcp
add_filter('xmlrpc_enabled', '__return_false');
// Hide Admin bar in front
add_filter('show_admin_bar', '__return_false');
// Admin Panel Style
include_once('includes/functions/panel-style.php');
// Estimated reading time Function
include_once('includes/functions/estimated-reading-time.php');
// post excerpt Function
include_once('includes/functions/post-excerpt.php');
// Clean up WordPress header
include_once('includes/functions/clean-up-head.php');
// Related Post Between article
include_once('includes/functions/related-post.php');
// Hide update notice
include_once('includes/functions/hide-update-notice.php');
//Lowercase Filenames for Uploads
add_filter('sanitize_file_name', 'mb_strtolower');
// WPML Language Switcher
// include_once('includes/functions/wpml-language-switcher.php')
// Disable cache for rtl.css
// include_once('includes/functions/disable-rtl-style-cache.php')
