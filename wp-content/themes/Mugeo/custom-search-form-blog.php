<div class="content-search">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_site_url(); ?>">
		<div>
			<input placeholder="Notícias/Posts" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
      <input type="hidden" value="10,8,9,5,4" name="cat" id="custom-cat">
			<input type="submit" id="searchsubmit" value="Procurar" />
		</div>
	</form>
</div>