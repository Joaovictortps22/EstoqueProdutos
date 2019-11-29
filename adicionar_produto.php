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
    <form action="_inserir_produto.php" method="post" style="margin-top: 30px;">
        <div class="form-group">
            <label>Número do Produto</label>
            <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required autocomplete="off">
        </div>
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto"  placeholder="Insira o nome do produto" required autocomplete="off">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];

                ?>
                    <option><?php echo $nome_categoria ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="text" class="form-control" name="quantidade"  placeholder="Insira a quantidade do produto" required autocomplete="off">
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
                <?php
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor order by nome_forn ASC";
                $buscar2 = mysqli_query($conexao,$sql2);

                while ($array2 = mysqli_fetch_array($buscar2)){
                    $id_forn = $array2['id_forn'];
                    $nome_forn = $array2['nome_forn'];

                ?>
                    <option><?php echo $nome_forn?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div style="text-align: right;">
        <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
        </div>
    </form>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>