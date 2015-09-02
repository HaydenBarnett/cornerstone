<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="<?php bloginfo("name"); ?>">
    <meta name="designer" content="<?php bloginfo("name"); ?>">
    <meta name="rating" content="general">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.js"></script>
    <![endif]-->    

    <?php wp_head(); ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
    
</head>
<body <?php body_class(); ?>>

    <header class="clearfix">

        <div class="container">

            <div class="branding">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo("name"); ?>"></a>
            </div>

            <nav id="primary-menu">
                <?php primary_menu(); ?>
            </nav>

        </div>

        <nav id="mobile-menu">
            <?php primary_menu(); ?>
        </nav>

        <a href="javascript:void(0)" class="hamburger"> 
            <div class="menu-bar bar-1"></div>
            <div class="menu-bar bar-2"></div>
            <div class="menu-bar bar-3"></div>
        </a>

    </header>

    <div id="content" class="clearfix">