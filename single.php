<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php include locate_template('partials/blocks/block-post.php'); ?>

    <?php endwhile; ?>
    
<?php get_footer(); ?>