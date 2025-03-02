<?php 
// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
get_header(); ?>
<div class="d-flex flex-column justify-content-center align-items-center mb-5">
    <h1>404</h1>
    <p><?php esc_html_e('not found!', THEMETEXTDOMAIN) ?></p>
</div>
<div class="d-flex justify-content-center align-items-center gap-5 mb-5">
    <a href="<?php echo esc_url(home_url('/')) ?>" class="btn btn-primary"><?php esc_html_e('Go Home', THEMETEXTDOMAIN) ?></a>
    <a onclick="history.back(-1)" class="btn btn-secondary"><?php esc_html_e('Go Back', THEMETEXTDOMAIN) ?></a>
</div>
<?php get_footer(); ?>