<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "thom_marques@hotmail.com";
    $assunto = "Portifólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: thom.rmarques@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabecalho)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>