<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php include locate_template('partials/analytics/analytics-head.php'); ?>
</head>
<body <?php body_class(); ?>>

    <?php include locate_template('partials/analytics/analytics-body.php'); ?>

    <header id="header" class="block block-border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php include locate_template('partials/components/logo.php'); ?>
                    <?php include locate_template('partials/components/nav-primary.php'); ?>
                    <?php include locate_template('partials/components/nav-hamburger.php'); ?>
                </div>
            </div>
        </div>
        <?php include locate_template('partials/components/nav-mobile.php'); ?>
    </header>
    
    <main id="main">