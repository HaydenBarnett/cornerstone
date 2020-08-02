<a class="card" href="<?php the_permalink(); ?>">
    <div class="image" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>);"></div>
    <div class="title">
        <h6 class="categories">
            <?php
                $categories = get_the_category();
                if ( !empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );   
                }
            ?>
        </h6>
        <h3><?php the_title(); ?></h3>
        <time><?php echo get_the_date('l, F jS, Y'); ?></time>
    </div>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</a>
