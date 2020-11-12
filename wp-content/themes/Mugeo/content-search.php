    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    
        <?php if( has_post_thumbnail() ): ?>
            
            <a href="<?php the_permalink(); ?>"><div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div></a>

        <?php endif; ?>
    	
    	<div class="search-content">
            <a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="entry-title">','</h2>' ); ?></a>
            	
            	<small><?php edit_post_link(); ?></small>
            	
            	<?php the_excerpt(); ?>
        </div>
    	
    	
    
    </article>

