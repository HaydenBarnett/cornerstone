<?php get_header(); ?>

    <div class="container">
 
        <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

            <div class="col-md-12">

                <div class="page-header">
                    <h1>Nothing found</h1>
                </div>

                <div class="page-content">
                    <p>Sorry it seems we cannot find what you were looking for.</p>
                </div>
    
            </div> 

        </article>

    </div>

<?php get_footer(); ?>