<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
        
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';
        if($nome && $email && $mensagem ) {

        $from = new SendGrid\Email(null, "hugiss5216@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "hugo8romao@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Cesar, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
        <?php header('Location: <?php echo get_stylesheet_directory_uri(); ?>/home/'); ?>
        } else {
            echo"Email não enviado: informar o email, nome e mensagem";
            <?php header('Location: https://hacktoberfest.digitalocean.com/'); ?>
        }
        ?>
</body>

</html>