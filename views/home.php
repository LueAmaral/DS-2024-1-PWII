<?php
    session_start();
    
    if (!isset($_SESSION['login_session']) and !isset($_SESSION['nome_session']) and !isset($_SESSION['avatar_session'])) {
        echo 'Você não está logado';
        header("refresh: 5; url=signin.php");
        session_destroy();
    } else {
        $username = $_SESSION['login_session'];
        $nome = $_SESSION['nome_session'];
        $avatar = $_SESSION['avatar_session'];

        $html = <<<HTML


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>$nome</h1>
        <img src="$avatar" alt="$nome">
    </body>
</html>

HTML;

        echo $html;
    }