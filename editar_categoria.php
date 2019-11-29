<?php
include 'conexao.php';


$id = $_GET['id'];

?>

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
    <h4>Formulário de Edição</h4>
    <?php

    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)){

        
        $nomecategoria = $array['nome_categoria'];
        $id_categoria = $array['id_categoria'];
 

    ?>
    <form action="_atualizar_categoria.php" method="post" style="margin-top: 30px;">

        <div class="form-group">
            <label>Categoria</label>
            <input type="text" class="form-control" name="nome_categoria"  value="<?php echo $nomecategoria ?>">
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>

        <div style="text-align: right;">
        <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
        </div>
    <?php } ?>
    </form>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>