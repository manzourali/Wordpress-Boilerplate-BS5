<?php
function add_interesting_article_in_the_middle($content)
{
    if (!is_single()) return $content;

    $paragraphs = explode("</p>", $content);
    $paragraphs_count = count($paragraphs);
    $middle_index = absint(floor($paragraphs_count / 2));
    $interesting_content = "";

    if ($paragraphs_count <= 4) return $content;

    for ($i = 0; $i < $paragraphs_count; $i++) {
        if ($i === $middle_index) {
            global $post;
            $primary_category = wp_get_object_terms($post->ID, 'category', array('fields' => 'ids'));
            $inlineRelatedPosts = get_posts(array(
                'post_type' => array('post'),
                "posts_per_page" => 4,
                // "terms" => $primary_category,
                "orderby" => "rand",
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => $primary_category,
                        'operator' => 'OR'
                    )
                ),
                'post_status' => 'publish',
                'suppress_filters' => false,
            ));
            // var_dump($inlineRelatedPosts);
            if (count($inlineRelatedPosts) > 1) {

                $interesting_content .= "<div class=\"interesting-container\">";
                $interesting_content .= "<span class=\"interesting-headline\">" . __("Also interesting", THEMETEXTDOMAIN) . "</span>";
                $interesting_content .= "<ul>";

                foreach ($inlineRelatedPosts as $post_obj) {
                    if ($post_obj->ID == get_the_ID()) continue;
                    $interesting_content .= "<li><a href=\"" . get_permalink($post_obj->ID) . "\" title=\"" . $post_obj->post_title . "\">" . $post_obj->post_title . "</a></li>";
                }

                $interesting_content .= "</ul>";
                $interesting_content .= "</div>";
            }
        }
        $interesting_content .= $paragraphs[$i] . '</p>';
    }
    return $interesting_content;
}
add_filter('the_content', 'add_interesting_article_in_the_middle');
