<?php


// Configure example nav

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


// Set content width

if ( ! isset( $content_width ) ) {
    $content_width = 1170;
}


// Replace Wordpress login logo

function cornerstone_login_logo() { ?> 
    <style type="text/css"> 
        .login h1 a { background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png); }
    </style>
<?php } add_action( 'login_enqueue_scripts', 'cornerstone_login_logo' );


// Relink Wordpress login logo

function cornerstone_logo_url() {
    return home_url();
} add_filter( 'login_headerurl', 'cornerstone_logo_url' );


// Rename Wordpress login logo title

function cornerstone_logo_title() {
    return get_bloginfo("name");
} add_filter( 'login_headertitle', 'cornerstone_logo_title' );


// Rename Wordpress login logo title

function cornerstone_remove_admin_logo() { ?> 
    <style type="text/css"> 
        #wpadminbar #wp-admin-bar-wp-logo, #footer-thankyou { display: none; } 
    </style>
<?php } add_action('wp_before_admin_bar_render', 'cornerstone_remove_admin_logo', 0);


//  Remove unused wordpress interface items

function remove_menus() {
    remove_menu_page( 'edit-comments.php' );      // Comments
    remove_menu_page( 'tools.php' );              // Tools
} add_action( 'admin_menu', 'remove_menus' );


// Setup Theme

function cornerstone_after_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __( 'Primary Menu', 'cornerstone' )
    ));
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
} add_action('after_setup_theme', 'cornerstone_after_setup_theme');


// Dequeue jQuery Migrate

function dequeue_jquery_migrate(&$scripts){
    if(!is_admin()){
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array( 'jquery-core' ));
    }
} add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );


// Queue css and js

function cornerstone_scripts() {
    $theme = wp_get_theme();
    $theme_version = $theme['Version'];
    wp_enqueue_style('cornerstone-styles', get_stylesheet_uri(), '', $theme_version);
    wp_enqueue_script('cornerstone-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), $theme_version, true);
} add_action( 'wp_enqueue_scripts', 'cornerstone_scripts' );


// Cleanup wp_head

function cornerstone_init() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
} add_action('init', 'cornerstone_init');

?>