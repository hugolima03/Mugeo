<?php 
//Template Name: Sucesso 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #1E1D18;
        }

        .success-wrapper {
            color: #F1F3F8;
            width: fit-content;
            margin: 0 auto;
            display: grid;
            
            justify-content: center;
            grid-template-columns: 1fr;
        }

        .success-wrapper h1 {
            font-size: 62px;
            justify-self: center;
        }

        .success-wrapper p {
            font-size: 24px;
            grid-column: 1;
        }

        .success-wrapper img {
            grid-column: 1;
            justify-self: center;
            width: 250px;
            padding-bottom: 20px;
        }

        .success-wrapper a {
            color: #F1F3F8;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="success-wrapper">
        <h1>Obrigado!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/imgs/icons/check.svg" alt="Sucesso">
        <a href="/home/">Voltar para o Início</a>
    </div>
</body>
</html>