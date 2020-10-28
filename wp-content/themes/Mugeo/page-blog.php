<?php 
//Template Name: Blog
get_header(); 
?>

<div class="blog-hero" data-anime="800">

    <?php query_posts('showposts=1&cat=7'); ?>

    <?php

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
    <h2><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo get_the_excerpt(); ?></p>

    <?php endwhile; else: endif?>

</div>

<div class="blog-noticias-hero" data-anime="1200">
    <div class="slider-wrapper-blog">

        <?php query_posts('showposts=3&cat=8'); ?>

        <?php

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="slide-item">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="postexample"></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png"
                alt="Linha"><br>
            <p>Terça-feira</p><br>
            <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <?php endwhile; else: endif?>

    </div>
</div>

<main class="main-blog">

    <div class="blog-wrapper">

        <div class="post-wrapper">

            <?php query_posts('showposts=3&cat=9'); ?>

            <?php

        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                <label>
                    <?php
                        $tag = get_the_tags();
                        if ($tag) {
                        $tag = $tag[0]; echo $tag->name;
                        }
                    ?>
                </label>
                <a class="post-link" href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo get_the_excerpt(); ?></p>
                <a class="text-decoration-underline post-link" href="<?php the_permalink(); ?>">Saiba mais...</a>
            </div>

            <?php endwhile; else: endif?>


        </div>

        <div class="sidebar-wrapper">
            <div class="sidebar-component">
                <div class="sidebar-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/1lupa.svg" alt="Procurar">
                    <input type="text" placeholder="Procurar..."><br>
                </div>

                <div class="sidebar-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/1tag.svg"
                        alt="Tags"><label>Tags</label>
                </div>
                <p>
                    #saude #geografia #mugeo #hydros #ufrr #minerais #esculturas #estagio #esculturas #saude #mugeo
                    #ufrr
                </p>

                <div class="sidebar-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/1lapis.svg" alt="">
                    <label>Categorias</label>
                </div>
                <p>
                    #saude #geografia #mugeo #hydros #ufrr #minerais #esculturas #estagio #esculturas #saude #mugeo
                    #ufrr
                </p>
            </div>

            <div class="sidebar-component">
                <div class="sidebar-item">
                    <label>Arquivos</label>
                </div>
                <p>
                    2020 2020 2020 2020 2020
                    2019 2019 2019 2019 2019
                </p>
            </div>
        </div>

    </div>
</main>

<div class="newsletter">
    <h2>Assine nossa Newsletter</h2>
    <h3>Receba notícias do mugeo pelo email!</h3>
    <input type="text" placeholder="Nome" style="text-align: center">
    <input type="text" placeholder="Seu melhor Email" style="text-align: center">
    <input type="submit" value="Enviar">
</div>

<footer class="footer">

    <div class="footer_grid-blog">
        <div class="footer_column_1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/mugeo_logo.png" alt="Mugeo">
            <ul>
                <li><a href="/acervo/">Acervo</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="/contato/">Contato</a></li>
            </ul>
        </div>
        <div class="footer_column_3">
            <h3>Siga-nos</h3>
            <div class="social social_footer">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/instagram_white_icon.png"
                                alt="Instagram Icon">
                            <p>@mugeo_ufrr</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/facebook_white_icon.png"
                                alt="Instagram Icon">
                            <p>@mugeo_ufrr</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/home"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter_white_icon.png"
                                alt="Instagram Icon">
                            <p>@mugeo_ufrr</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer_column_4">
            <h3>Outros sites UFRR</h3>
            <ul>
                <li><a href="http://prae.ufrr.br/">PRAE</a></li>
                <li><a href="https://webmail.ufrr.br/">Webmail</a></li>
                <li><a href="https://sigaa.ufrr.br/">Sigaa</a></li>
            </ul>
        </div>
    </div>

</footer>
<div class="copyright">
    <p>© Museu geológico da UFRR 2020</p>
</div>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/simple-anime.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>

<div style="display: none">
    <?php 
    //Template Name: Blog
    get_footer(); 
    ?>
</div>