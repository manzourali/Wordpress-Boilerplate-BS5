<?php
add_filter('locale_stylesheet_uri', function ($localized_stylesheet_uri) {
    if (file_exists(get_stylesheet_directory() . '/rtl.css')) {
        $time_ver = filemtime(get_stylesheet_directory() . '/rtl.css');
        return add_query_arg(array('ver' => $time_ver), $localized_stylesheet_uri);
    } else {
        return false;
    }
});
