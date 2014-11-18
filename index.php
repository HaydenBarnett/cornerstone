<?php get_header(); ?>

    <div id="content-inner" class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-header">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                    </div>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    
<?php get_footer(); ?>