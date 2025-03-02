<?php
// Admin color scheme
function wpacg_admin_color_scheme()
{
    //Get the theme directory
    $theme_dir = get_stylesheet_directory_uri();

    //
    wp_admin_css_color(
        THEMETEXTDOMAIN,
        __(THEMETEXTDOMAIN),
        get_template_directory_uri() . '/assets/theme.css',
        array('#212322', '#fff', '#f478c4', '#0075c9')
    );
}
add_action('admin_init', 'wpacg_admin_color_scheme');

// Login page
function my_login_logo()
{ ?>
    <style>
        body,
        a {
            /* color: #212322 !important; */
            color: #fff !important;
            position: relative;
        }

        body::after {
            content: "";
            width: 100%;
            height: 100vh;
            height: 100dvh;
            position: absolute;
            left: 0;
            top: 0;
            /* background: #212322 url('./wp-content/themes/<?php // echo THEMETEXTDOMAIN; ?>/assets/images/svg/sign-pattern.svg') no-repeat !important; */
            /* background-size: 33.33% !important; */
            background-size: cover !important;
            background-position: center center;
            opacity: .9;
            opacity: 1;
            filter: brightness(.8);
            z-index: -1;
        }

        #login-message {
            color: #212322;
            font-size: 0.9rem;
            border-radius: 25px !important;
        }

        .login .message,
        .login .notice {
            border-left-color: #0075c9 !important;
        }

        #login h1 a,
        .login h1 a {
            background-image: url('./wp-content/themes/<?php echo THEMETEXTDOMAIN; ?>/assets/images/logo.png') !important;
            width: 275px;
            height: 47px;
            padding: 10px 8px 0;
            background-size: 155px 58px;
            background-repeat: no-repeat;
            background-size: contain;
            filter: brightness(0) invert(1);
        }

        .login form {
            background: transparent !important;
            /* box-shadow: -10px 10px 30px rgba(0, 0, 0, 0.16) !important; */
            /* border-radius: 15px; */
            border: unset !important;
            padding: 2rem 0 0 !important;
        }

        .login form input {
            border: none;
        }

        .login form label {
            margin-bottom: 8px;
        }

        .login form .input,
        .login input[type=password],
        .login input[type=text] {
            border-radius: 25px !important;
            padding: .2rem 1rem !important;
        }

        .wp-core-ui .button,
        .wp-core-ui .button-secondary {
            color: #0075c9 !important;
        }

        .wp-core-ui .button-primary {
            background: #0075c9 !important;
            border-color: #c9e8ff !important;
            border-radius: 15px !important;
            transition: all .3s ease;
            font-weight: 700;
            color: #fff !important;
        }

        .wp-core-ui .button-primary:hover {
            border-color: #0075c9 !important;
            background: transparent !important;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

// redirect logo to homepage
function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');
