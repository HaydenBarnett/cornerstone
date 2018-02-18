<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="excerpt-title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <div class="excerpt-content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</section>