<?php get_header(); ?>

    <?php include locate_template('partials/sections/section-hero-archive.php'); ?>

    <?php if (have_posts()): ?>
    	
        <?php include locate_template('partials/sections/section-posts.php'); ?>

    <?php else: ?>

        <?php include locate_template('partials/sections/section-noresults.php'); ?>

    <?php endif; ?>
    
<?php get_footer(); ?>