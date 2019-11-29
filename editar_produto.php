<?php
include 'conexao.php';


$id = $_GET['id'];

?>







<!DOCTYPE html>
<html lang="pt-br">

 
<head>
<meta charset="utf-8">
    <title>Meu Script</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        #tamanhoContainer{
            width: 500px;
        }
        .form-group{
            margin-top: 30px;
        }
        
    </style>
</head>



<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>Formulário de Cadastro</h4>
    <?php

    $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)){

        $id_estoque = $array['id_estoque'];
        $nomeproduto = $array['nomeproduto'];
        $nroproduto = $array['nroproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];

    ?>
    <form action="_atualizar_produto.php" method="post" style="margin-top: 30px;">
        <div class="form-group">
            <label>Número do Produto</label>
            <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto"  value="<?php echo $nomeproduto ?>">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">
                <option>Periféricos</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Celulares</option>
            </select>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="text" class="form-control" name="quantidade"  value="<?php echo $quantidade ?>">
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor"> 
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
            </select>
        </div>
        <div style="text-align: right;">
        <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
        </div>
    <?php } ?>
    </form>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>