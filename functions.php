<?php
	function cornerstone_after_setup_theme() {
		register_nav_menu('primary', __( 'Navigation Menu', 'cornerstone'));
		add_theme_support('post-thumbnails');
	} add_action('after_setup_theme', 'cornerstone_after_setup_theme');
	function cornerstone_init() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
	} add_action('init', 'cornerstone_init');
?>