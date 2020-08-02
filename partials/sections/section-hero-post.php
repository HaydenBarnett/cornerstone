<?php
    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<div class="section section-hero <?php if ($image): ?>section-hero-offset-image<?php endif; ?> section-lg section-alternate">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h6 class="categories"><?php the_category(' '); ?></h6>
                    <h1><?php the_title(); ?></h1>
                    <time><?php echo get_the_date('l, F jS, Y'); ?></time>
                </div>
                <div class="image">
                    <img src="<?php echo $image; ?>">
                </div>
            </div>
        </div>
    </div>
</div>