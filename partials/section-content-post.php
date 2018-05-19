<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-title">
                    <h1><?php the_title(); ?></h1>
                    <time><?php echo get_the_date('l, F jS, Y'); ?></time>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>