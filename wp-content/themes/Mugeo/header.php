<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Cardo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/responsivo.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon.png" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body>

  <div class="estrutura">
    <header class="header">
      <div>
        <a href="/home/" class="logo_a"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/mugeo_logo.png" class="logo" alt="Logo Mugeo"></a>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="/home/">Início</a></li>
          <li><a href="/acervo/">Acervo</a></li>
          <li><a href="/blog/">Blog</a></li>
          <li><a href="/contato/">Contato</a></li>
        </ul>
      </nav>
    </header>