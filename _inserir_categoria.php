<link rel="stylesheet" href="css/bootstrap.css">


 
<?php
include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (nome_categoria) VALUES ('$categoria')";

$inserir = mysqli_query($conexao,$sql);

?> 

<div class="container" style ="width: 400px; margin-top: 40px;">
    <center>
        <h3>Categoria cadastrada com sucesso ;)</h3>
        <div style="margin-top: 10px;">
        <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
    </center>
</div>



