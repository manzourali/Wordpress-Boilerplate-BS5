<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-12">
            <?php include_once(get_template_directory() . '/includes/breadcrumb.php'); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-12">
            <h1 class="kz-title">
                <?php esc_html_e('Search results for', THEMETEXTDOMAIN) ?> "<?php echo get_search_query(); ?>"
            </h1>
        </div>
        <div class="col-md-6 col-12">
            <div class="mt-2 mt-md-0 result-found text-md-end text-start">
                <span>
                    <?php
                    if (is_search()) {
                        global $wp_query;
                        $posts_per_page = $wp_query->query_vars['posts_per_page'];
                        $posts_found    = $wp_query->found_posts;
                        $paged = $paged == 0 ? 1 : $paged;
                        $start_result = (($paged - 1) * $posts_per_page) + 1;
                        $end_result = min($start_result + $posts_per_page - 1, $posts_found);
                        if ($posts_found) {
                            printf(
                                esc_html__('Displaying results %1$s-%2$s out of %3$s for %4$s', 'total'),
                                $start_result,
                                $end_result,
                                $posts_found,
                                get_search_query(false)
                            );
                        }
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <div class="d-flex gap-4  align-items-center flex-wrap">
                <?php esc_html_e('Show results in: ', THEMETEXTDOMAIN); ?>
                <a href="<?= home_url() .  "?s=" . get_search_query() . '&post_type=post' ?>" class=""><?php esc_html_e('Articles', THEMETEXTDOMAIN); ?></a>
                <a href="<?= home_url() .  "?s=" . get_search_query() . '&post_type=products' ?>" class=""><?php esc_html_e('Products', THEMETEXTDOMAIN); ?></a>
                <a href="<?= home_url() .  "?s=" . get_search_query() . '&post_type=page' ?>" class=""><?php esc_html_e('Pages', THEMETEXTDOMAIN); ?></a>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <div id="search_results" class="search_results">
                <div class="row">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                            if (get_post_type() == "page") {
                    ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb2">
                                    <?php get_template_part('templates/item', 'page'); ?>
                                </div>
                            <?php } elseif (get_post_type() == "post") { ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb2">
                                    <?php get_template_part('templates/item', 'blog', array('class' => 'second-style'));
                                    ?>
                                </div>
                            <?php } elseif (get_post_type() == "products") { ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb2">
                                    <?php get_template_part('templates/item', 'product');
                                    ?>
                                </div>
                            <?php } ?>
                    <?php endwhile;
                    else :
                        // ANCHOR
                        _e('<div class="col-12 text-center">No result found</div>', THEMETEXTDOMAIN);
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation" class="col-12 mb-5">
            <?php get_pagination(); ?>
        </nav>
    </div>
</div>
<?php get_footer(); ?>