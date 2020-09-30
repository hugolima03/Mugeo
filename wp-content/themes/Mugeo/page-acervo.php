<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mugeo - Museu geológico UFRR</title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Cardo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles/responsivo.css">
  <link rel="shortcut icon" href="src/favicon.png" type="image/x-icon">
</head>

<body>
  <div class="estrutura">
    <header class="header">
      <div>
        <a href="index.html" class="logo_a"><img src="src/imgs/mugeo_logo.png" class="logo" alt="Logo Mugeo"></a>
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
      <div class="title_acervo">
        <div data-anime="1200">
          <p>UFRR</p> <img class="linha" src="src/imgs/line_small.png" alt="Linha">
          <p>das 10:00 ás 18:00</p>
        </div>
        <h1 data-anime="800">Acervo</h1>
        <div data-anime="1400">
          <a href="acervo.html">Conheça o Acervo</a><img class="linha_regular" src="src/imgs/line_regular.png"
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

    <footer class="footer">

      <div class="footer_grid">
        <div class="footer_column_1">
          <img src="src/imgs/mugeo_logo.png" alt="Mugeo">
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
                <a href="https://www.instagram.com/"><img src="src/imgs/icons/instagram_white_icon.png"
                    alt="Instagram Icon">
                  <p>@mugeo_ufrr</p>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/"><img src="src/imgs/icons/facebook_white_icon.png"
                    alt="Instagram Icon">
                  <p>@mugeo_ufrr</p>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/home"><img src="src/imgs/icons/twitter_white_icon.png"
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
  <script src="scripts/simple-anime.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>