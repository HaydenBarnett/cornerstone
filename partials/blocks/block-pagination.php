<?php if (is_paginated()): ?>

<div class="block block--pagination block-md block-border-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>