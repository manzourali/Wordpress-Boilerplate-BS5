<?php
function slice_post_excerpt($excerpt, $ch = 260)
{
	if (empty($excerpt)) {
		return 0;
	}

	$excerpt = strip_shortcodes($excerpt);
	$excerpt = substr($excerpt, 0, $ch);
	$result = substr($excerpt, 0, strrpos($excerpt, ' ')) . ' ... ';
	return $result;
}