<div class="section">
    <div class="container">
        <div class="row">
            <?php while (have_posts()): the_post(); ?>
                <div class="col-lg-6">
                    <?php include locate_template('partials/components/card-post-excerpt.php'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php include locate_template('partials/sections/section-pagination.php'); ?>