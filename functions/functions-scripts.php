<?php
/* --------------------------------------------------------------
   Functions - Scripts
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
    wp_enqueue_style('dm-sans-font', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', '');
    wp_enqueue_style('theme-styles', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.3.1', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), $theme_version, true);
} add_action( 'wp_enqueue_scripts', 'queue_scripts' );