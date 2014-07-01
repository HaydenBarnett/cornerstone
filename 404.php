<?php get_header(); ?>

    <div id="content-inner">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-header">
                    <h1>Nothing found</h1>
                </div>

                <div class="entry-content">
                    <p>Sorry it seems we cannot find what you were looking for.</p>
                </div>

            </article>

        <?php endwhile; ?>

    </div>

<?php get_footer(); ?>