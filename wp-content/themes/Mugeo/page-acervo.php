<?php 
//Template Name: Acervo
get_header(); 
?>

<div class="hero">
    <div class="title_acervo">
        <div data-anime="1200">
            <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha">
            <p><?php the_field('hero-horas')?></p>
        </div>
        <h1 data-anime="800">Acervo</h1>
        <div data-anime="1400">
            <a href="/contato/">Entre em contato</a><img class="linha_regular"
                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png" alt="Linha">
        </div>
    </div>

    <div class="input-wrapper" data-anime="1800">
        <p>Selecionar categoria: <a href="/category/rochas/">Rochas</a> ou <a href="/category/minerais/">Minerais</a>
        </p>
        <hr>
        <?php get_template_part('custom-search-form-acervo'); ?>
    </div>
</div>

<section class="acervo" data-anime="1800">
    <div class="acervo-grid">

        <?php query_posts('cat=6,7'); ?>

        <?php

        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



        <div class="acervo-item">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="Acervo-Item"></a>
            <div class="acervo-item-description">
                <p>
                    <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
                </p>
                <p>
                    <?php the_category(); ?>
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>

        <?php endwhile; else: endif?>
    </div>
</section>


<?php get_footer(); ?>