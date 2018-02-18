<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('partials/section-content', 'post'); ?>

    <?php endwhile; ?>
    
<?php get_footer(); ?>