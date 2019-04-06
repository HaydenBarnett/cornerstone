<?php
/* --------------------------------------------------------------
   Functions - Wordpress Setup
   -------------------------------------------------------------- */

// Remove p tags from images

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
} add_filter('the_content', 'filter_ptags_on_images');


// Set custom excerpt length

function set_excerpt_length( $length ) {
    return 50;
} add_filter( 'excerpt_length', 'set_excerpt_length', 999 );


// Set excerpt more link

function set_excerpt_more( $more ) {
    return ' ... <a class="read-more" href="'.get_permalink(get_the_ID()).'">continue reading</a>.';
} add_filter('excerpt_more', 'set_excerpt_more');


// Set Wordpress login logo image

function set_login_logo() { ?> 
    <style type="text/css"> 
        #login h1 a { 
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/symbol.svg);
            -webkit-background-size: contain;
            background-size: contain;
            height: 80px;
            width: auto;
            margin-bottom: 40px;
        }
    </style>
<?php } add_action( 'login_enqueue_scripts', 'set_login_logo' );


// Set Wordpress login logo url

function set_logo_url() {
    return home_url();
} add_filter( 'login_headerurl', 'set_logo_url' );


// Set Wordpress login logo title

function set_logo_title() {
    return get_bloginfo("name");
} add_filter( 'login_headertitle', 'set_logo_title' );


// Remove Wordpress admin logos

function remove_admin_logos() { ?> 
    <style type="text/css"> 
        #wpadminbar #wp-admin-bar-wp-logo, #footer-thankyou { display: none; } 
    </style>
<?php } add_action('wp_before_admin_bar_render', 'remove_admin_logos', 0);


// Remove unused wordpress interface items

function remove_menus() {
    // remove_menu_page( 'edit-comments.php' );   // Comments
    // remove_menu_page( 'tools.php' );        // Tools
} add_action( 'admin_menu', 'remove_menus' );


// Disable emoji's

function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );    
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
} add_action( 'init', 'disable_emojis' );


// Show superscript & subscript in visual editor

function mce_buttons($buttons) {   
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';
    return $buttons;
} add_filter('mce_buttons_2', 'mce_buttons');


// Setup Theme

function setup_theme() {

    // add_image_size( 'banner', 1920, 1080, true );

    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption',
        'widgets'
    ));

    // add_editor_style();

} add_action('after_setup_theme', 'setup_theme');


// Cleanup Wordpress head

function theme_init() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
} add_action('init', 'theme_init');