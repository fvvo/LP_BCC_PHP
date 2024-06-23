<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Autor</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Autor.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container indigo lighten-4 deep-blue-text col s12">
        <div class="center green">
            <h1>Inserir Autor</h1>
        </div>
        <div class="row  black-text">
            <form action="insAutor.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe o Nome do Autor" id="nome" name="txtNome" type="text"
                        class="validate">
                    <label id="nome" for="nome">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe a Editora do Autor" id="editora" name="txtEdi" type="text"
                        class="validate">
                    <label id="editora" for="editora">Editora</label>
                </div>

                x<div class="green lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstAutor.php'">
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