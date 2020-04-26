<?php
    $title = get_field('title');
    $features = get_field('features');
    $count = count(get_field('features'));
?>

<div class="block-feature-list align<?php echo $block['align']; ?>">
    <?php if ($title): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php if (have_rows('features')): ?>
            <?php while(have_rows('features')): the_row(); ?>
                <?php
                    $image_id = get_sub_field('image');
                    $image_alt = get_post_meta($image_id , '_wp_attachment_image_alt', true);
                    $image = wp_get_attachment_image_src($image_id, 'thumbnail');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                <div class="col-lg-4 col-md-4">
                    <div class="feature">
                        <?php if ($image_id): ?>
                            <div class="image">
                                <img width="48" src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ($title): ?>
                            <h4><?php echo $title; ?></h4>
                        <?php endif; ?>
                        <?php echo $content; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>