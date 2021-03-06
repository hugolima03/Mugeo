<?php 
//Template Name: Home
get_header(); 
?>

<div class="hero">
    <div class="title">
        <div data-anime="1200">
            <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha">
            <p>das 10:00 ás 18:00</p>
        </div>
        <h1 data-anime="800">Museu de<br>Geociências</h1>
        <div data-anime="1400">
            <a href="/acervo/">Conheça o Acervo</a><img class="linha_regular"
                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png" alt="Linha">
        </div>
    </div>

    <div class="slider-wrapper fadeInDown" data-anime="1600">

        <?php query_posts('showposts=3&cat=4'); ?>

        <?php 
        
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="slide-item">
            <a href="<?php the_permalink(); ?>"
                title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('homepage-slider-news'); ?></a>
            <h3>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h3>
            <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha"><br>

            <p>Terça-feira</p><br>
            <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <?php endwhile; else: endif?>

    </div>

</div>

<main class="main">
    <div class="content_grid">
        <h3>Notícias relevantes</h3>
        <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png"
            alt="Linha preta">
        <?php query_posts('showposts=2&cat=5'); ?>

        <?php 

        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="Exemplo de post"></a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <label>
                <?php
                    $tag = get_the_tags();
                    if ($tag) {
                    $tag = $tag[0]; echo $tag->name;
                    }
                ?>
            </label>
            <p class="article-content"><?php echo get_the_excerpt(); ?></p>
            <div class="article-button">
                <a href="<?php the_permalink(); ?>">
                    <p>Saiba Mais</p>
                </a>
            </div><br>
        </article>

        <img id="line_with_opacity" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_with_opacity.png"
            alt="Linha">

        <?php endwhile; else: endif?>


        <div class="blog-button blog-button-home">
            <a href="/blog/" class="black-a">
                <p>Acessar o blog</p>
            </a>
        </div>

        <section class="visita">
            <h3>Planeje sua visíta</h3>
            <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png"
                alt="Linha preta">

            <div class="visita_grid">
                <img class="image_indenter" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/visite.png"
                    alt="Visite o Mugeo">

                <div class="horario">
                    <h2>
                        Horários de funcionamento
                    </h2>
                    <p>
                        Domingo<br>
                        Segunda<br>
                        Terça a Sexta-feira<br>
                    </p>
                    <p>
                        <strong>
                            Fechado<br>
                            10AM - 04PM<br>
                            10AM - 06PM
                        </strong>
                    </p>
                </div>

                <div class="local">
                    <h2>
                        Universidade Federal de Roraima
                    </h2>
                    <p>
                        Bloco Hydros<br>
                        Anexo I<br>
                        Primeira sala a esquerda
                    </p>
                </div>

            </div>
        </section>

        <section>
            <h3>Contato</h3>
            <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png"
                alt="Linha preta">
            <div class="contato_grid">
                <a href="https://www.google.com/maps/place/UFRR/@2.8344042,-60.6960301,17z/data=!3m1!4b1!4m5!3m4!1s0x8d93057634767323:0xe7b9d451b20cb198!8m2!3d2.8344042!4d-60.6938414"
                    target="_blank"><img class="image_indenter contato_img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/contato_mapa.png"
                        alt="Mugeo UFRR"></a>
                <div class="social">
                    <h2>Conheça nossas redes sociais</h2>
                    <p>
                        mugeo_ufrr@gmail.com<br>
                        (+420) 233 093 1230
                    </p>
                    <ul>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/insta.svg"
                                alt="Instagram Icon" class="svg-icon">
                            <p><a href="#">@mugeo_ufrr</a></p>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/face.svg"
                                alt="Instagram Icon" class="svg-icon">
                            <p><a href="#">@mugeo_ufrr</a></p>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter.svg"
                                alt="Instagram Icon" class="svg-icon">
                            <p><a href="#">@mugeo_ufrr</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="blog-button buttonbottomspace">
            <a href="/contato/" class="black-a">
                <p>Contato</p>
            </a>
        </div>
    </div>
</main>


<?php get_footer(); ?>