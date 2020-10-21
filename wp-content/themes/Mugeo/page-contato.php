<?php 
//Template Name: Contato
get_header(); 
?>

<div class="contato-estrutura">
    <div class="hero-contato">
        <div class="title" data-anime="800">
            <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha">
            <p>das 10:00 ás 18:00</p>
            <h1>Contato</h1>
            <a href="index.html">Museu geológico</a><img class="linha_regular" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png"
                alt="Linha">
        </div>
    </div>

    <div class="horarioedias" data-anime="1200">
        <h3><strong>Horários e dias de funcionamento</strong></h3>
        <p>
            Domingo<br>
            Segunda<br>
            Terça a sexta-feira<br>
        </p>
        <p>
            Fechado<br>
            10 AM - 04 PM<br>
            10 AM - 06 PM<br>
        </p>
    </div>

    <a href="https://www.google.com/maps/place/UFRR/@2.8344042,-60.6960301,17z/data=!3m1!4b1!4m5!3m4!1s0x8d93057634767323:0xe7b9d451b20cb198!8m2!3d2.8344042!4d-60.6938414" target="_blank"><img class="contato-img" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/contato_mapa.png" alt="contato_mapa" data-anime="1200"></a>

    <div class="contato-form" data-anime="1800">
        <form action="">
            <label for=""><strong>Nome</strong></label>
            <input type="text">
            <label for=""><strong>Email</strong></label>
            <input type="text">
            <label for=""><strong>Mensagem</strong></label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="ENVIAR"><br>
            <div class="contato-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/contato-telefone.png" alt=""><strong><span>95 99999-9999</span></strong><br>
            </div>
            <div class="contato-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/contato-email.png" alt=""><span><strong>mugeo_ufrr@gmail.com</strong></span>
            </div>
        </form>
    </div>
</div>


<?php get_footer(); ?>