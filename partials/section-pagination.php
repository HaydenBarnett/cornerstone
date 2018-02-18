<?php if (is_paginated()): ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>