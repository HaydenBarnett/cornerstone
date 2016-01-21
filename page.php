<?php get_header(); ?>

    <div class="container">

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

    </div>

<?php get_footer(); ?>