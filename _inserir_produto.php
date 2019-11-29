<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style= width: 300px;>

</div> 
<h4>
    Produto adicionado com sucesso!
</h4>
<br>
<br> 
<br>
<a href="index.php" role="button" class="btn btn-sm btn-primary">CADASTRE NOVAMENTE</a>
<?php
include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>