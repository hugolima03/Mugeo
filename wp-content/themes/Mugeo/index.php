<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mugeo - Museu geológico UFRR</title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Cardo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/responsivo.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon.png" type="image/x-icon">
</head>

<body>

  <div class="estrutura">
    <header class="header">
      <div>
        <a href="index.html" class="logo_a"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/mugeo_logo.png" class="logo" alt="Logo Mugeo"></a>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="index.html">Início</a></li>
          <li><a href="acervo.html">Acervo</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>


      </nav>
    </header>

    <div class="hero">
      <div class="title">
        <div data-anime="1200">
          <p>UFRR</p> <img class="linha" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha">
          <p>das 10:00 ás 18:00</p>
        </div>
        <h1 data-anime="800">Museu de<br>Geociências</h1>
        <div data-anime="1400">
          <a href="acervo.html">Conheça o Acervo</a><img class="linha_regular" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_regular.png"
            alt="Linha">
        </div>
      </div>

      <div class="slider-wrapper fadeInDown" data-anime="1600">

        <div class="slide-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample2.png" alt="postexample">
          <h3>Evento</h3>
          <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha"><br>
          <p>Terça-feira</p><br>
          <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <div class="slide-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample3.png" alt="postexample">
          <h3>Evento</h3>
          <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha"><br>
          <p>Terça-feira</p><br>
          <p>Andrea Mantegnea - Parnassus</p>
        </div>

        <div class="slide-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample.png" alt="postexample">
          <h3>Evento</h3>
          <img class="linha_small" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_small.png" alt="Linha"><br>
          <p>Terça-feira</p><br>
          <p>Andrea Mantegnea - Parnassus</p>
        </div>

      </div>

    </div>

    <main class="main">
      <div class="content_grid">
        <h3>Notícias relevantes</h3>
        <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png" alt="Linha preta">

        <article>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample4.png" alt="Exemplo de post">
          <h4>Pertubações geológicas no ecossistema amazonico</h4>
          <label>Evento</label>
          <p class="article-content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </p>
          <div class="article-button">
            <p>Saiba Mais</p>
          </div><br>
        </article>

        <img id="line_with_opacity" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_with_opacity.png" alt="Linha">

        <article>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/postexample5.png" alt="Exemplo de post">
          <h4>Pertubações geológicas no ecossistema amazonico</h4>
          <label>Evento</label>
          <p class="article-content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
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
          <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png" alt="Linha preta">

          <div class="visita_grid">
            <img class="image_indenter" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/visite.png" alt="Visite o Mugeo">

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
          <img class="linha_preta" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/line_black_big.png" alt="Linha preta">
          <div class="contato_grid">
            <img class="image_indenter contato_img" src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/contato_mapa.png" alt="">
            <div class="social">
              <h2>Conheça nossas redes sociais</h2>
              <p>
                mugeo_ufrr@gmail.com<br>
                (+420) 233 093 1230
              </p>
              <ul>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/insta.svg" alt="Instagram Icon" class="svg-icon">
                  <p>@mugeo_ufrr</p>
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/face.svg" alt="Instagram Icon" class="svg-icon">
                  <p>@mugeo_ufrr</p>
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter.svg" alt="Instagram Icon" class="svg-icon">
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

    <footer class="footer">

      <div class="footer_grid">
        <div class="footer_column_1">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/mugeo_logo.png" alt="Mugeo">
          <ul>
            <li><a href="acervo.html">Acervo</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </div>
        <div class="footer_column_2">
          <h3>Assine nossa Newsletter</h3>
          <form action="">
            <input type="text" name="email" id="email" placeholder="seuemail@gmail.com">
          </form>
          <p>Receba as notícias em primeira mão</p>
        </div>
        <div class="footer_column_3">
          <h3>Siga-nos</h3>
          <div class="social social_footer">
            <ul>
              <li>
                <a href="https://www.instagram.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/instagram_white_icon.png"
                    alt="Instagram Icon">
                  <p>@mugeo_ufrr</p>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/facebook_white_icon.png"
                    alt="Instagram Icon">
                  <p>@mugeo_ufrr</p>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/twitter_white_icon.png"
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