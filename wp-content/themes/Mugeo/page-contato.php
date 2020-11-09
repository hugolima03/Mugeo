<?php 
//Template Name: Contato
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body class="contato-body">
    <div class="contato-estrutura">
        <div class="hero-contato">
            <div class="title" data-anime="800">
                <p>UFRR</p> <img class="linha"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha">
                <p><?php the_field('hero-horas')?></p>
                <h1>Contato</h1>
                <a href="/home/">Museu geológico</a><img class="linha_regular"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png" alt="Linha">
            </div>
        </div>

        <div class="horarioedias" data-anime="1200">
            <h3><strong>Horários e dias de funcionamento</strong></h3>
            <p>
                <?php the_field('visite-dia1')?><br><br>
                <?php the_field('visite-dia2')?><br><br>
                <?php the_field('visite-dia3')?><br><br>
            </p>
            <p>
                <?php the_field('visite-hora1')?><br>
                <?php the_field('visite-hora2')?><br>
                <?php the_field('visite-hora3')?><br>
            </p>
        </div>

        <a href="https://www.google.com/maps/place/UFRR/@2.8344042,-60.6960301,17z/data=!3m1!4b1!4m5!3m4!1s0x8d93057634767323:0xe7b9d451b20cb198!8m2!3d2.8344042!4d-60.6938414"
            target="_blank"><img class="contato-img"
                src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/contato_mapa.png" alt="contato_mapa"
                data-anime="1200"></a>

        <div class="contato-form" data-anime="1800">
            <form method="POST" action="<?php echo get_stylesheet_directory_uri(); ?>/formulario-contato.php">
                <label><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome">
                <label><strong>Email</strong></label>
                <input type="email" name="email" id="email">
                <label><strong>Mensagem</strong></label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                <input type="submit" value="ENVIAR"><br>
                <div class="contato-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/contato-telefone.png"
                        alt=""><strong><span><?php the_field('mugeo-telefone')?></span></strong><br>
                </div>
                <div class="contato-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/contato-email.png"
                        alt=""><span><strong><?php the_field('mugeo-email')?></strong></span>
                </div>
            </form>
        </div>
    </div>

</body>

<?php endwhile; else: endif?>
<?php get_footer(); ?>