<div class="content-search">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_site_url(); ?>">
		<div>
			<label class="screen-reader-text" for="s">Search for:</label>
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
      <input type="hidden" value="6,7" name="cat" id="custom-cat">
			<input type="submit" id="searchsubmit" value="Search" />
		</div>
	</form>
</div>