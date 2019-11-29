<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/47b9aaf13c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Lista de Categorias</title>
</head>
<body> 
    <main style="margin-top: 40px;">
    <div class="container">
        <h3 style="text-align: center;">Lista de Categorias</h3>
    </div>
    <br>
    <table class="table"> 
  <thead>
    <tr>

      <th scope="col">Categoria</th>
      <th scope="col">Ação</th> 

    </tr>
  </thead>
        <?php
            //Conexão com o banco, realizando a busca dos dados e selecionando os dados na tabela estoque
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)){
                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nome_categoria']; 
                        ?>
    <tr>

        <td><?php echo $nomecategoria ?></td>

        <td>
            <a class="btn btn-warning btn-sm" style="color: #fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fas fa-trash-alt"></i> &nbsp;Excluir</a>    
        </td>

            <?php } ?>
    </tr>
    </table>
    </main>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>