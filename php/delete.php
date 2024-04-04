<?php

    include "connection.php";

    $rm = $_GET['rm'];

    $dados = $conn -> query("SELECT avatar FROM cadastro WHERE rm = $rm");
    while ($linha = mysqli_fetch_array($dados)) {
        $avatar = $linha['avatar'];
    }

    unlink("$avatar");

    mysqli_query($conn, "DELETE FROM cadastro WHERE rm = $rm");

    header("Location: ../views/table.php");