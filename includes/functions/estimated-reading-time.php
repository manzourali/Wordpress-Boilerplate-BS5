<?php
function site_estimated_reading_time($content = '', $wpm = 200)
{
	if (empty($content)) {
		return 0;
	}
	$clean_content = strip_shortcodes($content);
	$clean_content = wp_strip_all_tags($clean_content);
	// $word_count = str_word_count($clean_content);
	$word_count = count(preg_split('~[^\p{L}\p{N}\']+~u', $clean_content));
	$time = ceil($word_count / $wpm);
	$time = $time < 1 ? '1' : $time;
	return $time;
}