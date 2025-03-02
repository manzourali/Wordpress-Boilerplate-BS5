<?php
// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
get_header(); ?>
<?php global $post;
if (current_user_can('administrator')) {
    edit_post_link(__('Edit'));
}
$primary_cat_id = get_post_meta(get_the_ID(), 'rank_math_primary_category', true);
if ($primary_cat_id) {
    $categoryID = get_term($primary_cat_id, 'category');
}
?>
<div class="py-3"></div>
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-12">
            <?php include_once(get_template_directory() . '/includes/breadcrumb.php'); ?>
        </div>
    </div>
</div>
<section class="post-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-12">
                <h1 class="post-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-12">
                <?php
                if (!has_excerpt()) { ?>
                    <div class="mb2">
                        <?php echo slice_post_excerpt(get_the_content(), 450); ?>
                    </div>
                <?php } else { ?>
                    <p class="mb2">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                <?php
                } ?>
            </div>
            <div class="col-xl-6 col-12">
                <div class="post-thumnbnail">
                    <figure>
                        <?php
                        the_post_thumbnail('', array('class' => ' img-fluid', 'loading' => 'lazy', 'alt' => esc_html(get_the_title()))); ?>
                    </figure>
                </div>
            </div>
            <div class="col-12 mt2">
                <div class="post-body" id="post-body">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mt2 mb1 pb1">
    <div class="row">
        <div class="col-xxl-6 col-xl-5 col-12 mb-xl-0 mb-5">
            <?php get_template_part('templates/partials/single', 'tags'); ?>
        </div>
        <div class="col-xxl-6 col-xl-7 col-12">
            <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-center justify-content-lg-end flex-wrap align-items-start gap-md-0 gap-3">
                <?php echo get_the_date('d F Y'); ?>
                <?php get_template_part('templates/partials/single', 'share'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates/partials/related', 'posts'); ?>
<?php get_footer(); ?>