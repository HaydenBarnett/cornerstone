<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <meta name="author" content="<?php bloginfo("name"); ?>">
        <meta name="designer" content="<?php bloginfo("name"); ?>">
        <meta name="rating" content="general">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

        <!--[if lt IE 9]>
            <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.js"></script>
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
