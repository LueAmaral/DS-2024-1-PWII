<?php
    include 'connection.php';

    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $dados = $conn -> query("SELECT * FROM cadastro WHERE rm = $rm");
    $linha = $dados -> fetch_assoc();
    $emailbd = $linha['email'];

    if ($email != $emailbd) {
        $dados = $conn -> query("SELECT * FROM cadastro WHERE email = '$email'");
        if ($dados -> num_rows > 0) {
            echo "E-mail já existe";
        } else {
            $conn -> query("UPDATE cadastro SET nome = '$nome', email = '$email', senha = '$senha' WHERE rm = $rm");
            echo "Dados Atualizados";
        }
    } else {
        $conn -> query("UPDATE cadastro SET nome = '$nome', email = '$email', senha = '$senha' WHERE rm = $rm");
        echo "Dados Atualizados";
    }
    
    // header("refresh: 2; url = ../table.html");