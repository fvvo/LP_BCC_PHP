<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Livro</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Autor.php' ?>
    <?php include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Cliente.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Livro</h1>
        </div>
        <div class="row  black-text">
            <form action="insLivro.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe descrição do Livro" id="descricao" name="txtDesc" type="text"
                        class="validate">
                    <label id="descricao" for="descricao">Descrição</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe codigo do autor" id="autor" name="txtAut" type="number" min="0"
                        class="validate">
                    <label id="autor" for="autor">Autor</label>
                </div>
            
                <div class="input-field col s8">
                    <input placeholder="informe a Quantidade de Livros em estoque" id="qtde" name="txtQtde" type="text" 
                        class="validate">
                    <label for="qtde">Quantidade de Livros em estoque</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe Valor do Livro" id="valor" name="txtVal" type="float"
                        class="validate">
                    <label for="compra"></label>
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

</html