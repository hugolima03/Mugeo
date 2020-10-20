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
            <a href="acervo.html">Conheça o Acervo</a><img class="linha_regular"
                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png" alt="Linha">
        </div>
    </div>

    <div class="slider-wrapper fadeInDown" data-anime="1600">

        <div class="slide-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample2.png" alt="postexample">
            <h3>Evento</h3>
            <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha"><br>
            <p>Terça-feira</p><br>
            <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <div class="slide-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample3.png" alt="postexample">
            <h3>Evento</h3>
            <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha"><br>
            <p>Terça-feira</p><br>
            <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <div class="slide-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample.png" alt="postexample">
            <h3>Evento</h3>
            <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha"><br>
            <p>Terça-feira</p><br>
            <p>Andrea Mantegnea - Parnassus</p>
        </div>

    </div>

</div>

<main class="main">
    <div class="content_grid">
        <h3>Notícias relevantes</h3>
        <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png"
            alt="Linha preta">

        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample4.png" alt="Exemplo de post">
            <h4>Pertubações geológicas no ecossistema amazonico</h4>
            <label>Evento</label>
            <p class="article-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex
                ea commodo consequat.
            </p>
            <div class="article-button">
                <p>Saiba Mais</p>
            </div><br>
        </article>

        <img id="line_with_opacity" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_with_opacity.png"
            alt="Linha">

        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample5.png" alt="Exemplo de post">
            <h4>Pertubações geológicas no ecossistema amazonico</h4>
            <label>Evento</label>
            <p class="article-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex
                ea commodo consequat.
            </p>
            <div class="article-button">
                <p>Saiba Mais</p>
            </div><br>
        </article>
        <a href="blog.html" class="black-a">
            <div class="blog-button">
                <p>Acessar o blog</p>
            </div>
        </a>

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
                            <p>@mugeo_ufrr</p>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/face.svg"
                                alt="Instagram Icon" class="svg-icon">
                            <p>@mugeo_ufrr</p>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter.svg"
                                alt="Instagram Icon" class="svg-icon">
                            <p>@mugeo_ufrr</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <a href="contato.html" class="black-a">
            <div class="blog-button buttonbottomspace">
                <p>Contato</p>
            </div>
        </a>
    </div>
</main>

<?php get_footer(); ?>