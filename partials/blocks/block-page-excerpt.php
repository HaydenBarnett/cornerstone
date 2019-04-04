<div id="post-<?php the_ID(); ?>" <?php post_class('block block-md'); ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="block-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</div>