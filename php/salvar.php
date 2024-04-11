<?php

    include "conn.php";

    $codProduto = $_POST['codProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $precoProduto = $_POST['precoProduto'];
    $descricaoProduto = $_POST['descricaoProduto'];
    $imagemProduto = $_FILES['imagemProduto']['name'];
    $pasta = "../img/";
    $pastabd = "img/";

    $ext = strtolower(pathinfo($imagemProduto, PATHINFO_EXTENSION));
    $imagemf = $codProduto . '.' . $ext;
    $imagembd = $pastabd . $imagemf;

    $dados = $conn -> query("SELECT * FROM produtos");
    while ($linha = $dados -> fetch_assoc()) {
        $codProdutobd = $linha['cod'];
    }

    if ($codProduto == $codProdutobd) {
        echo "Código de produto já existe!";
    } else {
        echo "Sucesso!";
        $conn -> query("INSERT INTO produtos (id, cod, nome, preco, descricao, imagem) VALUES (NULL, '$codProduto', '$nomeProduto', '$precoProduto', '$descricaoProduto', '$imagembd')");

        if (move_uploaded_file($_FILES['imagemProduto']['tmp_name'], $pasta . $imagemf)) {
        } else {
            echo "Não foi possivel concluir o upload da imagem.";
        }
    }