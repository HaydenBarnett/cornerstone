<?php

/* --------------------------------------------------------------
   Scripts
   -------------------------------------------------------------- */

// Dequeue jQuery Migrate

function dequeue_jquery_migrate(&$scripts){
    if(!is_admin()){
        $scripts->remove('jquery');
        // Uncomment if you want to load jQuery from Wordpress Core
        // $scripts->add('jquery', false, array( 'jquery-core' ));
    }
} add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );


// Queue CSS and JS

function queue_scripts() {
    $theme = wp_get_theme();
    $theme_version = $theme['Version'];
    wp_enqueue_style('open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600', '');
    wp_enqueue_style('theme-styles', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.3.1', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), $theme_version, true);
} add_action( 'wp_enqueue_scripts', 'queue_scripts' );