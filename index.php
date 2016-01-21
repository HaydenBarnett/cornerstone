<?php get_header(); ?>

    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="page-header animated fadeIn">
                                <h1><?php the_title(); ?></h1>
                            </div>

                            <div class="page-content animated fadeIn">
                                <?php the_content(); ?>
                            </div>

                        </div>

                    </div>

                </section>

            <?php endwhile; ?>

        <?php else: ?>

            <section>

                <div class="row">

                    <div class="col-md-12">

                        <div class="page-header animated fadeIn">
                            <h1>Nothing found</h1>
                        </div>

                    </div>

                </div>

            </section>

        <?php endif; ?>

    </div>
    
<?php get_footer(); ?>