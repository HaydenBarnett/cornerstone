<?php

add_action('acf/init', 'acf_blocks_init');

function acf_blocks_init() {
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'              => 'feature-list',
            'title'             => __('Feature List'),
            'description'       => __('List of features with image, title & content support.'),
            'render_template'   => get_template_directory() . '/partials/blocks/block-feature-list.php',
            'category'          => 'layout',
            'icon'              => 'editor-ul',
            'supports'          => array( 'left', 'right', 'center', 'wide' ),
        ));

    }
}