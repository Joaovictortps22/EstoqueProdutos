 <?php
 include 'conexao.php';

 $id = $_GET['id'];

 ?>

 <html>
    <head>
        <meta charset="utf-8">
        <title>Edição de Fornecedor</title>
        <link rel="stylesheet" href="css/bootstrap.css">

        <style>
            #tamanhoContainer{
                width: 500px;
            }
            .forn-group{
                margin-top: 30px;
            }
        </style>
    </head>



    <body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
            <h4>Formulário de Edição</h4>

            <?php
            $sql = "SELECT * FROM `fornecedor` WHERE id_forn = $id";
            $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $nomeforn = $array['nome_forn'];
                    $id = $array['id_forn'];
            ?>
            
            <form action="_atualizar_fornecedor.php" method="post" style="margin-top: 30px;">

                <div class="form-group">
                    <label>Fornecedor</label>
                        <input type="text" class="form-control" name="nome_fornecedor"  value="<?php echo $nomeforn ?>">
                        <input type="number" class="form-control" name="id_fornecedor" value="<?php echo $id ?>" style="display: none">
                </div>

                <div style="text-align: right;">
                    <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
                </div>
                
                <?php } ?>
            </form>

        </div>



<script type="text/javascript" src="js/bootstrap.js"></script>

    </body>
 </html>