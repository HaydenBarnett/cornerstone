<?php get_header(); ?>

    <div class="container">
 
        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">

                <div class="col-md-12">

                    <div class="page-header">
                        <h1>Nothing found</h1>
                    </div>

                    <div class="page-content">
                        <p>Sorry it seems we cannot find what you were looking for.</p>
                    </div>
        
                </div>

            </div>

        </section>

    </div>

<?php get_footer(); ?>