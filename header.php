<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="theme-color" content="<?php echo THEMECOLOR; ?>" />
    <script src="<?= get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js' ?>"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sideMenu">
        <div class="offcanvas-header d-flex justify-content-between">
            <div class="dropdown">
                <button id="theme-dropdown-button" class="btn dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Theme -->
                </button>
                <ul id="theme-dropdown" class="dropdown-menu">
                    <li>
                        <button class="dropdown-item" data-bs-theme-value="light">
                            <svg width="23" class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8025 18.0871C7.03723 18.0871 5.4658 16.5156 5.51682 11.8013C5.56785 7.08705 7.03723 5.51562 11.8025 5.51562C16.5678 5.51562 18.0882 7.08705 18.0882 11.8013C18.0882 16.5156 16.5678 18.0871 11.8025 18.0871Z" fill="currentColor"></path>
                                <path d="M11.8008 0.800781C12.2347 0.800781 12.5865 1.15256 12.5865 1.5865V3.15792C12.5865 3.59186 12.2347 3.94364 11.8008 3.94364C11.3668 3.94364 11.0151 3.59186 11.0151 3.15792V1.5865C11.0151 1.15256 11.3668 0.800781 11.8008 0.800781Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M12.5865 20.4436C12.5865 20.0097 12.2347 19.6579 11.8008 19.6579C11.3668 19.6579 11.0151 20.0097 11.0151 20.4436V22.0151C11.0151 22.449 11.3668 22.8008 11.8008 22.8008C12.2347 22.8008 12.5865 22.449 12.5865 22.0151V20.4436Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M22.8008 11.8008C22.8008 12.2347 22.449 12.5865 22.0151 12.5865H20.4436C20.0097 12.5865 19.6579 12.2347 19.6579 11.8008C19.6579 11.3668 20.0097 11.0151 20.4436 11.0151H22.0151C22.449 11.0151 22.8008 11.3668 22.8008 11.8008Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M3.15792 12.5865C3.59186 12.5865 3.94364 12.2347 3.94364 11.8008C3.94364 11.3668 3.59186 11.0151 3.15792 11.0151H1.5865C1.15256 11.0151 0.800781 11.3668 0.800781 11.8008C0.800781 12.2347 1.15256 12.5865 1.5865 12.5865H3.15792Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M3.38805 3.38805C3.6949 3.08121 4.19238 3.08121 4.49922 3.38805L5.61039 4.49922C5.91723 4.80606 5.91723 5.30355 5.61039 5.61039C5.30355 5.91723 4.80606 5.91723 4.49922 5.61039L3.38805 4.49922C3.08121 4.19238 3.08121 3.6949 3.38805 3.38805Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M4.49922 20.5388C4.19238 20.8457 3.6949 20.8457 3.38805 20.5388C3.08121 20.232 3.08121 19.7345 3.38805 19.4277L4.49922 18.3165C4.80606 18.0097 5.30355 18.0097 5.61039 18.3165C5.91723 18.6233 5.91723 19.1208 5.61039 19.4277L4.49922 20.5388Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M20.5388 3.38805C20.232 3.08121 19.7345 3.08121 19.4277 3.38805L18.3165 4.49922C18.0097 4.80606 18.0097 5.30355 18.3165 5.61039C18.6233 5.91723 19.1208 5.91723 19.4277 5.61039L20.5388 4.49922C20.8457 4.19238 20.8457 3.6949 20.5388 3.38805Z" fill="currentColor" fill-opacity="0.4"></path>
                                <path d="M19.4277 20.5388C19.7345 20.8457 20.232 20.8457 20.5388 20.5388C20.8457 20.232 20.8457 19.7345 20.5388 19.4277L19.4277 18.3165C19.1208 18.0097 18.6233 18.0097 18.3165 18.3165C18.0097 18.6233 18.0097 19.1208 18.3165 19.4277L19.4277 20.5388Z" fill="currentColor" fill-opacity="0.4"></path>
                            </svg>
                            روشن
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" data-bs-theme-value="dark">
                            <svg class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9358 14.3652C20.0691 14.0415 19.9906 13.6679 19.7389 13.4276C19.4872 13.1873 19.115 13.1308 18.8051 13.2857C17.7584 13.8091 16.5801 14.1034 15.3317 14.1034C10.9835 14.1034 7.45846 10.5246 7.45846 6.1098C7.45846 4.32254 8.0352 2.67449 9.01033 1.34372C9.21644 1.06244 9.22917 0.680892 9.04229 0.386091C8.85541 0.0912907 8.50809 -0.054977 8.17055 0.0189828C3.50017 1.04235 2.17361e-07 5.25905 0 10.3077C-2.50276e-07 16.1208 4.64155 20.8333 10.3672 20.8333C14.6778 20.8333 18.372 18.1625 19.9358 14.3652Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0928 3.67116L13.7596 1.84183C13.9751 1.25035 14.4797 0.939795 14.9987 0.910156C15.5177 0.939795 16.0222 1.25035 16.2378 1.84183L16.9045 3.67116L18.7063 4.34807C19.9329 4.8089 19.9329 6.57032 18.7063 7.03114L16.9045 7.70806L16.2378 9.53738C16.0222 10.1289 15.5177 10.4394 14.9987 10.4691C14.4797 10.4394 13.9751 10.1289 13.7596 9.53738L13.0928 7.70806L11.2911 7.03114C10.0644 6.57032 10.0644 4.8089 11.2911 4.34807L13.0928 3.67116Z" fill="currentColor" fill-opacity="0.4"></path>
                            </svg>
تاریک
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" data-bs-theme-value="auto">
                            <svg class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300" height="23" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z"></path>
                            </svg>
                            سیستم
                        </button>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        </div>
        <div class="offcanvas-footer">

        </div>
    </div>
    <header class="header" id="header">
        <button data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="sideMenu" class="btn p-0 m-0 menu-toggle-icon" aria-label="menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                <path d="M20 12L10 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20 5L4 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20 19L4 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </header>
    <main>