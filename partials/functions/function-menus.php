<?php

/* --------------------------------------------------------------
   Menus
   -------------------------------------------------------------- */

function get_menu_by_location($location) {
    if( empty($location) ) return false;
    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;
    $menu_obj = get_term( $locations[$location], 'nav_menu' );
    return $menu_obj;
}

function get_menu_name($location) {
    if( empty($location) ) return false;
    $menu_obj = get_menu_by_location($location);
    return "<h6>".esc_html($menu_obj->name)."</h6>";
}

function create_titled_menu($name) {
    if (has_nav_menu($name)) {
        echo get_menu_name($name);
        wp_nav_menu(get_menu_args($name));
    }
}

function get_menu_args($location) {
    $args = array(
        'theme_location'  => $location,
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
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
    );
    return $args;
}

function primary_menu() {
    wp_nav_menu(get_menu_args('primary'));
}

function footer_menu() {
    wp_nav_menu(get_menu_args('footer'));
}