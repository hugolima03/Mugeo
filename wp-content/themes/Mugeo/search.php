<?php get_header(); ?>
		
<div class="search-wrapper">

	<?php 
		
		if( have_posts() ):
			
	    	while( have_posts() ): the_post(); ?>
			
                <?php get_template_part('content-search'); ?>
            	
			
		<?php endwhile;
			
    endif;
    
    ?>
    <a href="/acervo/">Voltar</a>
</div>

<?php get_footer(); ?>