<?php 
//Template Name: Acervo
get_header(); 
?>


<div class="hero">
    <div class="title_acervo">
        <div data-anime="1200">
            <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha">
            <p>das 10:00 ás 18:00</p>
        </div>
        <h1 data-anime="800">Acervo</h1>
        <div data-anime="1400">
            <a href="acervo.html">Conheça o Acervo</a><img class="linha_regular"
                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png" alt="Linha">
        </div>
    </div>

    <form action="<?php echo site_url().'/controllerfiltro'; ?>" method="post" class="input-wrapper" data-anime="1800" name="FiltroBusca" id="FiltroBusca">
        <input type="hidden" id="CampoBuscaFiltro" name="CampoBuscaFiltro" value="<?php echo $_GET['CampoBusca']; ?>" >
        <select name="Categoria" id="Categoria" required>
            <option value="">Coleção</option>
            <?php 
            $BFetch=$wpdb->get_results("select * from wp_terms where term_id >4");
            foreach($BFetch as $Fetch) {
                echo "<option value='$Fetch->slug'>$Fetch->name</option>";
            }
            ?>
        </select>
        <input type="submit" value="Filtrar">
    </form>
</div>

<section class="acervo" data-anime="1800">
    <div class="acervo-grid">
        <?php query_posts('cat=5,6' ); ?>

        <?php

        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="acervo-item">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Acervo-Item"></a>
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