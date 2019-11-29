<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/47b9aaf13c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Listagem de produtos</title>
</head>
<body>
    
    <div class="container" style="margin-top: 40px;">
        <h3 style="text-align: center;">Lista de Produtos</h3>
    </div>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
        <?php
            //Conexão com o banco, realizando a busca dos dados e selecionando os dados na tabela estoque
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)){
                $id_estoque = $array['id_estoque'];
                $nomeproduto = $array['nomeproduto'];
                $nroproduto = $array['nroproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];     
        ?>
    <tr>
        <td><?php echo $nroproduto ?></td>
        <td><?php echo $nomeproduto ?></td>
        <td><?php echo $categoria ?></td>
        <td><?php echo $quantidade ?></td>
        <td><?php echo $fornecedor ?></td>
        <td>
            <a class="btn btn-warning btn-sm" style="color: #fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i> &nbsp;Excluir</a>    
        </td>

            <?php } ?>
    </tr>
</table>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>