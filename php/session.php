<?php

    session_start();
    include "connection.php";

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $session = $conn -> query("SELECT * FROM cadastros WHERE (rm = '$login' OR email = '$login') AND senha = '$senha'");

    $check = mysqli_num_rows($session);

    while ($linha = mysqli_fetch_array($session)) {
        $avatar = $linha['avatar'];
        $nome = $linha['nome'];
        $tipo = $linha['tipo'];
    }

    if ($check == 1) {
        $_SESSION['login_session'] = $login;
        $_SESSION['nome_session'] = $nome;
        $_SESSION['avatar_session'] = $avatar;
        header('Location: ../views/home.php');
    } else {
        header('Location: ../views/signin.php');
    }