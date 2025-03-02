<?php
// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-12">
            <?php include_once(get_template_directory() . '/includes/breadcrumb.php'); ?>
        </div>
        <div class="col-12">
            <?php echo the_title('<h1 class="">', '</h1>'); ?>
        </div>
        <div class="col-12">
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
<?php get_footer(); ?>