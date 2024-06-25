<?php
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Livro.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Livro.php';
$id = $_GET['id'];

$bllLiv = new BLL\Livro();
$livro = $bllLiv->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Venda de Livro</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Detalhes do Livro</h1>
        </div>


        <div class="row  black-text">
            <form action="venLivro.php" method="POST" class="col s12">
            <div class="input-field col s8 black-text">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $livro->getID() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>

                <h5>Descrição: <?php echo $livro->getDescricao(); ?> </h5>
                <h5>Autor: <?php echo $livro->getAutor(); ?> </h5>
                <h5>Quantidade em Estoque: <?php echo $livro->getQuantidade(); ?> </h5>
                <h5>Valor: <?php echo $livro->getValor(); ?> </h5>
            </div>
                <div class="input-field col s8">
                    <input placeholder="informe codigo do cliente" id="cliente" name="txtCli" type="number" min="1"
                        class="validate" required>
                    <label id="cliente" for="cliente">Cliente</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstLivro.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

