<?php

    include "connection.php";

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $logar = $conn -> query("SELECT * FROM cadastro where (rm = '$login' or email = '$login') AND senha = '$senha' ");

    $check = mysqli_num_rows($logar);

    if ($check == 1) {
        echo 'olá';
    } else {
        echo 'erro';
    }

    // Versão do prof
    // if($check == 1) {
    //     header('Location: logado.php')
    // } else if {
    //     header('Location: erro.php')
    // }