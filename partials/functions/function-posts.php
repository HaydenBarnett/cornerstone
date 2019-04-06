<?php
/* --------------------------------------------------------------
   Functions - Custom Posts
   -------------------------------------------------------------- */

// Custom post type & category example

/*
function create_project_post() {

    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects', 'cornerstone' ),
                'singular_name' => __( 'Project', 'cornerstone' )
            ),
            'menu_icon' => 'dashicons-admin-multisite',
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
            'taxonomies' => array('project-category')
        )
    );

    register_taxonomy(
        'project-category',
        'project',
        array(
            'label' => __( 'Project Category', 'cornerstone' ),
            'hierarchical' => true,
            'query_var' => true,
            // 'rewrite' => array( 'slug' => 'project-category' )
        )
    );

} add_action( 'init', 'create_project_post' );
*/