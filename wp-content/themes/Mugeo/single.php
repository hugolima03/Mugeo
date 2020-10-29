<?php
/*
Single Post Template: Blog-template
Description: Template de post para notícias
*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mugeo - Museu geológico UFRR</title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Cardo:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/responsivo.css">
  <link rel="shortcut icon" href="src/favicon.png" type="image/x-icon">
</head>
<body class="post-template-body">
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

    <main class="post-template-main">
      <div class="post-content-wrapper">
        <label>
        <?php
          $tag = get_the_tags();
            if ($tag) {
            $tag = $tag[0]; echo $tag->name;
            }
        ?>
        </label>
        <h1><?php the_title(); ?></h1>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <p>
        <?php echo get_the_content(); ?>
        </p>
        
      </div>
    </main>

<?php get_footer(); ?>