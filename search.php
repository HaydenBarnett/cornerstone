<?php get_header(); ?>

    <?php get_template_part('partials/section-title', 'search'); ?>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('partials/section-excerpt', get_post_type()); ?>

        <?php endwhile; ?>

        <?php get_template_part('partials/section-pagination'); ?>

    <?php else: ?>

        <?php get_template_part('partials/section-content', 'none'); ?>

    <?php endif; ?>
    
<?php get_footer(); ?>