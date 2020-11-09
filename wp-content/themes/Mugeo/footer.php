<footer class="footer">

    <div class="footer_grid">
        <div class="footer_column_1">
            <a href="/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/mugeo_logo.png"
                    alt="Mugeo"></a>
            <ul>
                <li><a href="/acervo/">Acervo</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="/contato/">Contato</a></li>
            </ul>
        </div>
        <div class="footer_column_2">
            <h3>Assine nossa Newsletter</h3>
            <form method="POST" action="<?php echo get_stylesheet_directory_uri(); ?>/newsletter.php">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="seuemail@gmail.com">
                <button type="submit">Concluir</button>
            </form>
            <p>Receba as notícias em primeira mão</p>
        </div>
        <div class="footer_column_3">
            <h3>Siga-nos</h3>
            <div class="social social_footer">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/instagram_white_icon.png"
                                alt="Instagram Icon">
                            <p><?php the_field('mugeo-instagram')?></p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/facebook_white_icon.png"
                                alt="Facebook Icon">
                            <p><?php the_field('mugeo-facebook')?></p>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/home"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter_white_icon.png"
                                alt="Twitter Icon">
                            <p><?php the_field('mugeo-twitter')?></p>
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

<?php wp_footer(); ?>
</body>

</html>