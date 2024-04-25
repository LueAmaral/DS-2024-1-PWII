<?php

    include "connection.php";

    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $avatar = $_FILES['avatar']['name'];
    $tipo = $_POST['tipo'];
    $pasta = "../assets/img/";

    $ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
    $avatarf = $rm . '.' . $ext;
    $avatarbd = $pasta . $avatarf;

    $dados = $conn -> query("SELECT * FROM cadastro");
    while ($linha = $dados -> fetch_assoc()) {
        $rmbd = $linha['rm'];
        $emailbd = $linha['email'];
    }

    if ($rm == $rmbd) {
        echo "RM em uso.";
    } else if($email == $emailbd) {
        echo "Email em uso.";
    } else {
        echo "Sucesso!.";
        $conn -> query("INSERT INTO cadastro (id, rm, nome, email, senha, avatar, tipo) VALUES (NULL, '$rm', '$nome', '$email', '$senha', '$avatarbd', '$tipo')");
    
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $pasta . $avatarf)) {
        }
        else {
            $result_message = "Não foi possivel concluir o upload da imagem.";
        }
    }

    header("refresh: 2; url = ../views/signin.php");