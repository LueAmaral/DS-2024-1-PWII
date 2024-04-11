<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
  <head>
    <title>Listagem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>

  <body>
    <style>
      h1{
        text-align: center;
      }
      .imagem{
        width: 100px;
        height: 100px;
      }
      td{
        text-align: center;
      }
    </style>

    <button type="button" class="btn btn-primary" onclick="voltar()">Voltar</button>

    <script>
      function voltar() {
        window.location.href = "form.html";
      }
    </script>

    <h1>Listagem de Produtos</h1>
    <table border="1" width="100%" class="table table-striped table-bordered">
      <tr class="thead">
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>Imagem</th>
    </tr>

    <?php

      include "php/conn.php";

      $dados = $conn->query("SELECT * FROM produtos");

      while ($linha = $dados->fetch_assoc()) {

        $codProduto = $linha['cod'];
        $nomeProduto = $linha['nome'];
        $precoProduto = $linha['preco'];
        $descricaoProduto = $linha['descricao'];
        $imagemProduto = $linha['imagem'];

        echo "<tr>
          <td>$codProduto</td>
          <td>$nomeProduto</td>
          <td>$precoProduto</td>
          <td>$descricaoProduto</td>
          <td><img class='imagem' src=$imagemProduto></td>
        </tr>";
      }
    ?>
    </table>
  </body>
</html>