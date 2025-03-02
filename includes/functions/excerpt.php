<?php
function more($more)
{
	return '...';
}
add_filter('excerpt_more', 'more');
add_post_type_support('page', 'excerpt');