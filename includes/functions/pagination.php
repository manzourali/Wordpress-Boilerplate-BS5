<?php
// Pagination Function
function get_pagination($range = 4)
{
    global $paged, $wp_query, $max_page;

    // How much pages do we have?
    if (!$max_page) {
        $max_page = $wp_query->max_num_pages;
    }

    // We need the pagination only if there is more than 1 page
    if ($max_page > 1) {
        if (!$paged) $paged = 1;

        echo '<ul class="pagination">';
        if (get_previous_posts_link()) : ?>
            <li class="next-prev-chevron"><?php
                                            // To the previous page
                                            previous_posts_link('<i class="fa-solid fa-chevron-left"style="font-size: 0.8em;"></i>');
                                            ?></li><?php endif;

                    if ($max_page > $range + 1) :
                        if ($paged >= $range) echo '<li><a href="' . get_pagenum_link(1) . '">1</a></li>';
                        if ($paged >= ($range + 1)) echo '<li class="separate">&hellip;</li>';
                    endif;

                    // We need the sliding effect only if there are more pages than is the sliding range
                    if ($max_page > $range) {
                        // When closer to the beginning
                        if ($paged < $range) {
                            for ($i = 1; $i <= ($range + 1); $i++) {
                                echo ($i != $paged) ? '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>' : '<li class="current">' . $i . '</li>';
                            }
                            // When closer to the end
                        } elseif ($paged >= ($max_page - ceil(($range / 2)))) {
                            for ($i = $max_page - $range; $i <= $max_page; $i++) {
                                echo ($i != $paged) ? '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>' : '<li class="current">' . $i . '</li>';
                            }
                            // Somewhere in the middle
                        } elseif ($paged >= $range && $paged < ($max_page - ceil(($range / 2)))) {
                            for ($i = ($paged - ceil($range / 2)); $i <= ($paged + ceil(($range / 2))); $i++) {
                                echo ($i != $paged) ? '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>' : '<li class="current">' . $i . '</li>';
                            }
                        }
                        // Less pages than the range, no sliding effect needed
                    } else {
                        for ($i = 1; $i <= $max_page; $i++) {
                            echo ($i != $paged) ? '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>' : '<li class="current">' . $i . '</li>';
                        }
                    }
                    if ($max_page > $range + 1) :
                        // On the last page, don't put the Last page link
                        if ($paged <= $max_page - ($range - 1)) echo '<li class="separate">&hellip;</li><li><a href="' . get_pagenum_link($max_page) . '">' . $max_page . '</a></li>';
                    endif;
                    if (get_next_posts_link()) :
                        // Next page
                        ?>
            <li class="next-prev-chevron"><?php
                                            next_posts_link('<i class="fa-solid fa-chevron-right"style="font-size: 0.8em;"></i>');
                                            ?></li>

<?php endif;
                    echo '</div>';
                }
            }
