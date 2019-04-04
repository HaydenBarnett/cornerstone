<?php

/* --------------------------------------------------------------
   Plugins
   -------------------------------------------------------------- */

//  Disable contact form 7 scripts and styles

// add_filter( 'wpcf7_load_js', '__return_false' );
// add_filter( 'wpcf7_load_css', '__return_false' );


//  Use this to load contact form 7 scripts and styles on the contact page template

// if ( function_exists( 'wpcf7_enqueue_scripts' ) ) wpcf7_enqueue_scripts();
// if ( function_exists( 'wpcf7_enqueue_styles' ) ) wpcf7_enqueue_styles();


//  Hide yoast for defined custom post types

/* 
function yoast_is_toast(){
    if (!current_user_can('activate_plugins')) {
        remove_meta_box('wpseo_meta', 'custom_post_type', 'normal');
    }
} add_action('add_meta_boxes', 'yoast_is_toast', 99); 
*/