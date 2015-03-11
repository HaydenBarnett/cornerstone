<?php get_header(); ?>

    <div id="content-inner" class="container">
 
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-header">
                <h1>Nothing found</h1>
            </div>

            <div class="entry-content">
                <p>Sorry it seems we cannot find what you were looking for.</p>
            </div>

        </article>

    </div>

<?php get_footer(); ?>