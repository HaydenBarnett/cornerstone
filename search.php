<?php get_header(); ?>

    <?php include locate_template('partials/blocks/block-hero-search.php'); ?>

    <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

            <?php include locate_template('partials/blocks/block-page-excerpt.php'); ?>

        <?php endwhile; ?>

        <?php include locate_template('partials/blocks/block-pagination.php'); ?>

    <?php else: ?>

        <?php include locate_template('partials/blocks/block-noresults.php'); ?>

    <?php endif; ?>
    
<?php get_footer(); ?>