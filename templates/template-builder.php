<?php 
// Template Name: Page Builder
get_header(); ?>

    <?php while (have_posts()): the_post(); ?>

        <?php include locate_template('partials/sections/section-content.php'); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>