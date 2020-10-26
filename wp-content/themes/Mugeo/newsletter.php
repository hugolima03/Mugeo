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
		
        require 'vendor/autoload.php';
        if($nome && $email) {
        $from = new SendGrid\Email(null, "hugo8romao@gmail.com");
        $subject = "Email para Newsletter";
        $to = new SendGrid\Email(null, "hugiss5216romao@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá , <br><br>Novo email para Newsletter<br><br>Nome: $nome<br>Email: $email <br>");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
        
        header('Location: /sucesso/');
        
    } else {
        echo 'Email não enviado: informar o email e nome';
    }


    ?>
</body>

</html>