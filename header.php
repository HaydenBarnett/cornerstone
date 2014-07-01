<!doctype html>
<?php
    $url = get_bloginfo("url");
    $description = get_bloginfo("description");
    $directory = get_bloginfo("template_directory");
    $email = get_bloginfo("admin_email");
    $charset = get_bloginfo("charset");
    $lang = get_bloginfo("language");
    $author = get_bloginfo("name");
    $title = wp_title( '~', false, 'right' )." ".$author;
    $designer = "Hayden Bleasel";
    $rating = "general";
    $keywords = "a,b,c,d";
    $robots = "index, follow";
    $viewport = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi";
    $analytics_code = "UA-XXXX-Y";
    $type = "website";
?>
<!--[if lt IE 7]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="<?php echo $lang; ?>"><![endif]-->
<!--[if IE 7]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="<?php echo $lang; ?>"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="<?php echo $lang; ?>"><![endif]-->
<!--[if IE 9]><html class="ie ie9 ie-lt10 no-js" lang="<?php echo $lang; ?>"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="<?php echo $lang; ?>"><!--<![endif]-->
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="<?php echo $charset; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="author" content="<?php echo $author; ?>, <?php echo $email; ?>" />
        <meta name="designer" content="<?php echo $designer; ?>" />
        <meta name="viewport" content="<?php echo $viewport; ?>" />
        <meta name="rating" content="<?php echo $rating; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=yes" />
        <?php
            if (is_search())
                echo "<meta name=\"robots\" content=\"noindex, nofollow\" />";
            else
                echo "<meta name=\"robots\" content=\"$robots\" />";
        ?>
        <meta property="og:type" content="<?php echo $type; ?>" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:url" content="<?php echo $url; ?>" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="<?php echo $directory; ?>/assets/images/open-graph.png" />
        <!--[if IE ]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <![endif]-->
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-precomposed.png" />
        <link rel="stylesheet" href="<?php echo $directory; ?>/assets/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $directory; ?>/assets/css/fonts.css" />
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
        <link rel="stylesheet" href="<?php echo $directory; ?>/assets/css/responsive.css" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="<?php echo $directory; ?>/assets/js/modernizr.js"></script>
        <script src="<?php echo $directory; ?>/assets/js/prefix-free.js"></script>
        <script src="<?php echo $directory; ?>/assets/js/respond.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', '<?php echo $analytics_code; ?>');
            ga('send', 'pageview');
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>