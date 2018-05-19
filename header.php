<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="<?php bloginfo("name"); ?>">
    <meta name="designer" content="<?php bloginfo("name"); ?>">
    <meta name="rating" content="general">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <?php get_template_part( 'partials/analytics', 'header' ); ?>

    <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body <?php body_class(); ?>>

    <?php get_template_part( 'partials/analytics', 'body' ); ?>

    <header id="header">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="branding">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo("name"); ?>">
                        </a>
                    </div>
                    <nav id="primary-menu">
                        <?php primary_menu(); ?>
                    </nav>
                    <a id="hamburger" href="javascript:void(0)">
                        <div class="menu-bar bar-1"></div>
                        <div class="menu-bar bar-2"></div>
                        <div class="menu-bar bar-3"></div>
                    </a>
                </div>
            </div>
        </div>

        <nav id="mobile-menu">
            <?php primary_menu(); ?>
        </nav>

    </header>

    <div id="content">