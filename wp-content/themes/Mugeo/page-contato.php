<!DOCTYPE html>
<html lang="pr-bt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mugeo - Museu geológico UFRR</title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Cardo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles/responsivo.css">
  <link rel="shortcut icon" href="src/favicon.png" type="image/x-icon">
</head>

<body class="contato-body">
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

    <div class="contato-estrutura">
      <div class="hero-contato">
        <div class="title" data-anime="800">
          <p>UFRR</p> <img class="linha" src="src/imgs/line_small.png" alt="Linha">
          <p>das 10:00 ás 18:00</p>
          <h1>Contato</h1>
          <a href="index.html">Museu geológico</a><img class="linha_regular" src="src/imgs/line_regular.png"
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

      <img class="contato-img" src="src/imgs/contato_mapa.png" alt="contato_mapa" data-anime="1200">

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
            <img src="src/imgs/icons/contato-telefone.png" alt=""><strong><span>95 99999-9999</span></strong><br>
          </div>
          <div class="contato-icon">
            <img src="src/imgs/icons/contato-email.png" alt=""><span><strong>mugeo_ufrr@gmail.com</strong></span>
          </div>
        </form>
      </div>
    </div>


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