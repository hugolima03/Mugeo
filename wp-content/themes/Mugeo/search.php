<?php get_header(); ?>
		
<div class="search-wrapper">

	<?php 
		
		if( have_posts() ):
			
	    	while( have_posts() ): the_post(); ?>
			
          <?php get_template_part('content-search'); ?>
            	
			
        <?php endwhile;
    
    else :
      echo '<h2> Desculpa, não encontrei </h2><br>';
			
    endif;
    
    ?>
    <a href="/home/">Voltar</a>
</div>

<?php get_footer(); ?>