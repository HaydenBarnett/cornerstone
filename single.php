<?php get_header(); ?>

    <div id="content-inner" class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="page-header">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    </div>
    
<?php get_footer(); ?>