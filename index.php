<?php get_header(); ?>

    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

                    <div class="col-md-12">

                        <div class="page-header animated fadeIn">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <div class="page-content animated fadeIn">
                            <?php the_content(); ?>
                        </div>

                    </div>

                </article>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    
<?php get_footer(); ?>