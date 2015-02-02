<?php

    function cornerstone_nav() {
        wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
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

    function format_wp_title( $title, $sep ) {
        global $paged, $page;
        if ( is_feed() ) {
            return $title;
        }
        // Add the site name.
        $title .= get_bloginfo( 'name', 'display' );
        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title = "$title $sep $site_description";
        }
        // Add a page number if necessary.
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
            $title = "$title $sep " . sprintf( __( 'Page %s', 'cornerstone' ), max( $paged, $page ) );
        }
        return $title;
    }
    add_filter( 'wp_title', 'format_wp_title', 10, 2 );

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