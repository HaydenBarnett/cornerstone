<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-field" placeholder="Search ..." value="<?php echo get_search_query() ?>" name="s" title="Search for:" />
	<input type="submit" class="search-submit" value="Search" />
</form>