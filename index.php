<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php include locate_template('partials/blocks/block-post-excerpt.php'); ?>

        <?php endwhile; ?>

        <?php include locate_template('partials/blocks/block-pagination.php'); ?>

    <?php else: ?>

        <?php include locate_template('partials/blocks/block-content-none.php'); ?>

    <?php endif; ?>
    
<?php get_footer(); ?>