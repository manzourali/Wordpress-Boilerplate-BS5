<?php
// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
get_header(); ?>
<?php
// $queried_object = get_queried_object();
// $taxonomy = $queried_object->taxonomy;
// $term_id = $queried_object->term_id;
?>
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-12">
            <?php include_once(get_template_directory() . '/includes/breadcrumb.php'); ?>
        </div>
    </div>
</div>
<section class="archive">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_archive_title('<h1 class="">', '</h1>'); ?>
            </div>
            <?php if (get_the_archive_description()) : ?>
                <?php the_archive_description('<p class="taxonomy-description">', '</p>'); ?>
            <?php endif; ?>
        </div>
        <div class="row archive-list">
            <?php
            while (have_posts()) :
                the_post()
            ?>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb2">
                    <?php get_template_part('templates/loop-item/item', 'blog');
                    ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="container">
        <nav aria-label="navigation" class="text-center">
            <?php get_pagination(); ?>
        </nav>
    </div>
</section>
<?php get_footer(); ?>