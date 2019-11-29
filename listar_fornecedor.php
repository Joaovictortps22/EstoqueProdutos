<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/47b9aaf13c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Lista de Fornecedores</title>
</head>
<body> 
    <main style="margin-top: 40px;">
    <div class="container">
        <h3 style="text-align: center;">Lista de Fornecedores</h3>
    </div>
    <br>
    <table class="table"> 
  <thead>

    <tr>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th> 
    </tr>

  </thead>
        <?php
            //Conexão com o banco, realizando a busca dos dados e selecionando os dados na tabela fornecedor
            include 'conexao.php';
            $sql = "SELECT * FROM `fornecedor`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)){
                $id_forn = $array['id_forn'];
                $nomeforn = $array['nome_forn']; 
                        ?>
    <tr>

        <td><?php echo $nomeforn ?></td>

        <td>
            <a class="btn btn-warning btn-sm" style="color: #fff" href="editar_fornecedor.php?id=<?php echo $id_forn ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_fornecedor.php?id=<?php echo $id_forn ?>" role="button"><i class="fas fa-trash-alt"></i> &nbsp;Excluir</a>    
        </td>

            <?php } ?>
    </tr>
    </table>
    </main>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>