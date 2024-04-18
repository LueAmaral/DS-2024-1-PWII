<?php
    include 'connection.php';

    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn -> query("UPDATE cadastro SET nome = '$nome', email = '$email', senha = '$senha' WHERE rm = $rm");
    echo "Dados Atualizados";
    // header("refresh: 2; url = ../table.html");

