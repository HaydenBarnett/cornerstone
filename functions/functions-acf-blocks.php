<?php

add_action('acf/init', 'acf_blocks_init');

function acf_blocks_init() {
    if( function_exists('acf_register_block') ) {

        // acf_register_block(array(
        //     'name'              => 'feature-list',
        //     'title'             => __('Feature List'),
        //     'description'       => __('A feature list with customisable columns, alignment and colours.'),
        //     'render_template'   => get_template_directory() . '/partials/blocks/block-feature-list.php',
        //     'category'          => 'layout',
        //     'icon'              => 'layout',
        //     'supports'          => array( 'align' => false ),
        //     'keywords'          => array( 'feature', 'list' ),
        // ));

    }
}