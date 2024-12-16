<?php

// Capturar dados do usuário
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);

// Email de destino
$destino = "pedro@chatway-ia.com.br";

// Assunto 
$assunto = "Coleta de Dados - Site Chatway";

// Corpo do e-mail
$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular;

$cabeca = "From: contato.jpsft@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($destino,$assunto,$corpo,$cabeca)){
  echo("E-mail enviado com sucesso!");
    }else{
  echo("Erro ao enviar o e-mail!");
  }
}
?>