<div class="section section-excerpt section-lg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <time><?php echo get_the_date('l, F jS, Y'); ?></time>
                </div>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</div>