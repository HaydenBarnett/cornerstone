<?php get_header(); ?>

    <?php include locate_template('partials/sections/section-hero-archive.php'); ?>

    <?php if (have_posts()): ?>
    	
        <?php while (have_posts()): the_post(); ?>

            <?php include locate_template('partials/sections/section-post-excerpt.php'); ?>

        <?php endwhile; ?>

        <?php include locate_template('partials/sections/section-pagination.php'); ?>

    <?php else: ?>

        <?php include locate_template('partials/sections/section-noresults.php'); ?>

    <?php endif; ?>
    
<?php get_footer(); ?>