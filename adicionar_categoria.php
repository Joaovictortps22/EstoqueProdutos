<!DOCTYPE hmtl>
<html lang="pt-br">
<head>
    <meta charset="utf8">
    <title>Adicionando Categoria de Produto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     
    <div class="container" style="margin-top: 40px; width: 500px">
        <h4>Cadastro de Categoria</h4>
        <form action="_inserir_categoria.php" method="post">
            <label>Categoria</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off">
            </div>
            <div style="text-align: right;">
            <button type="submit" class="btn btn-sm" style="color: #ffffff; background-color: #FF1168">Cadastrar</button>
            </div>
        </form>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>