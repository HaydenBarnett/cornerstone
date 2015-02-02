<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Document settings and metadata -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo("description"); ?>" />
        <meta name="author" content="<?php bloginfo("name"); ?>" />
        <meta name="designer" content="<?php bloginfo("name"); ?>" />
        <meta name="rating" content="general" />
        <meta name="keywords" content="" />

        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- OpenGraph for Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php wp_title( '-', true, 'right' ); ?>" />
        <meta property="og:url" content="<?php bloginfo("url") ?>" />
        <meta property="og:description" content="<?php bloginfo("description"); ?>" />
        <meta property="og:image" content="<?php bloginfo("template_directory") ?>/img/open-graph.png" />
        <meta property="og:locale" content="en_US" />

        <!-- iOS, Android and Windows -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=yes" />
        <meta name="mobile-web-app-capable" content="yes" />
        
        <!-- Icons -->
        <link rel="icon" sizes="196x196" href="" />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon" href="" />
        <link rel="apple-touch-icon-precomposed" href="" />
        <meta name="msapplication-TileImage" content="" />
        <meta name="msapplication-TileColor" content="" />

        <!-- Miscellaneous and SEO -->
        <link rel="author" href="humans.txt" />
        <link rel="canonical" href="" />
        <link rel="sitemap" href="" />
        <link rel="next" href="" />
        <link rel="prev" href="" />

        <!-- CSS -->
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />

        <!-- JS -->
        <!--[if lt IE 9]>
            <script src="<?php bloginfo("template_directory") ?>/js/html5shiv.js"></script>
        <![endif]-->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-XXXXXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <div class="wrapper">

            <header>

                <div class="container">

                    <div class="branding">
                        <a href="<?php echo home_url(); ?>">
                            <h1><?php bloginfo("name"); ?></h1>
                        </a>
                        <p><?php bloginfo("description"); ?></p>
                    </div>

                    <nav>
                        <?php cornerstone_nav(); ?>
                    </nav>

                </div>

            </header>

            <div id="content">
