<?php 
//Template Name: Acervo
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hero">
    <div class="title_acervo">
        <div data-anime="1200">
            <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha">
            <p>das 10:00 ás 18:00</p>
        </div>
        <h1 data-anime="800">Acervo</h1>
        <div data-anime="1400">
            <a href="acervo.html">Conheça o Acervo</a><img class="linha_regular" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png"
                alt="Linha">
        </div>
    </div>

    <div class="input-wrapper" data-anime="1800">
        <label for="">Coleção:</label>
        <input type="text" placeholder="Minerais">
        <label for="">Nome do espécime:</label>
        <input type="text" placeholder="Quartzo Rosa">
        <button>Filtrar</button>
    </div>
</div>

<section class="acervo" data-anime="1800">
    <div class="acervo-grid">

        <div class="acervo-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/acervo-item.png" alt="">
            <div class="acervo-item-description">
                <p>
                    <strong>Itabirito</strong>
                </p>
                <p>
                    Rochas
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>
        <div class="acervo-item">
            <img src="src/imgs/acervo-item.png" alt="">
            <div class="acervo-item-description">
                <p>
                    <strong>Itabirito</strong>
                </p>
                <p>
                    Rochas
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>
        <div class="acervo-item">
            <img src="src/imgs/acervo-item.png" alt="">
            <div class="acervo-item-description">
                <p>
                    <strong>Itabirito</strong>
                </p>
                <p>
                    Rochas
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>
        <div class="acervo-item">
            <img src="src/imgs/acervo-item.png" alt="">
            <div class="acervo-item-description">
                <p>
                    <strong>Itabirito</strong>
                </p>
                <p>
                    Rochas
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>
        <div class="acervo-item">
            <img src="src/imgs/acervo-item.png" alt="">
            <div class="acervo-item-description">
                <p>
                    <strong>Itabirito</strong>
                </p>
                <p>
                    Rochas
                </p>
                <p>
                    MHNJB.GE.02/2016
                </p>
            </div>
        </div>

    </div>
</section>

<?php endwhile; else: endif?>
<?php get_footer(); ?>