<?php

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );

function my_enqueue_assets() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

require 'theme_update_check.php';
$KernlUpdater = new ThemeUpdateChecker(
    'divi-open-child',
    'https://kernl.us/api/v1/theme-updates/5d1e4b5de340c33e182925a7/'
);
