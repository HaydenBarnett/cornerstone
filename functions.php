<?php

    if ( ! isset( $content_width ) ) $content_width = 1170;

    function cornerstone_nav() {
        wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
            )
        );
    }

	function cornerstone_after_setup_theme() {
		register_nav_menu('primary', __( 'Navigation Menu', 'cornerstone'));
		add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
	} add_action('after_setup_theme', 'cornerstone_after_setup_theme');

	function cornerstone_init() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
	} add_action('init', 'cornerstone_init');

?>