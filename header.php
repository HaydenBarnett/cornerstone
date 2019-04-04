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

    <?php include locate_template('partials/blocks/block-header.php'); ?>

    <div id="content">