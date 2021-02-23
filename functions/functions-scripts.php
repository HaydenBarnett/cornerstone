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


// Gutenberg

function custom_gutenberg_assets() {
    $editorGlob = glob(get_template_directory() . '/css/dist/editor.min.*.css');
    wp_enqueue_style('sans-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', '');
    wp_enqueue_style('custom-gutenberg-styles', get_template_directory_uri() . '/css/dist/' . basename($editorGlob[0]));
} add_action( 'enqueue_block_editor_assets', 'custom_gutenberg_assets' );


// Queue CSS and JS

function queue_scripts() {
    $theme = wp_get_theme();
    $theme_version = $theme['Version'];
    $cssGlob = glob(get_template_directory() . '/css/dist/main.min.*.css');
    $jsGlob = glob(get_template_directory() . '/js/dist/scripts.min.*.js');
    wp_enqueue_style('sans-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', '');
    wp_enqueue_style('theme-default', get_stylesheet_uri(), array(), null);
    wp_enqueue_style('theme-main', get_template_directory_uri() . '/css/dist/' . basename($cssGlob[0]));
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/lib/jquery.js', array(), '3.3.1', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/dist/' . basename($jsGlob[0]) , array('jquery'), null, true);
} add_action( 'wp_enqueue_scripts', 'queue_scripts' );