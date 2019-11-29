<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor']; 

$sql = "INSERT INTO fornecedor (nome_forn) VALUES ('$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?> 

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style ="width: 400px; margin-top: 40px;">
    <center> 
        <h3>Fornecedor cadastrado com sucesso ;)</h3>
        <div style="margin-top: 10px;">
        <a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
    </center>
</div>