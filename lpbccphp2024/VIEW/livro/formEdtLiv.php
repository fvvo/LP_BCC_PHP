<?php

use MODEL\autor;

  include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Livro.php';
  include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Livro.php'; 
  $id = $_GET['id']; 

  
  $bllLiv = new BLL\Livro();
  $livro = $bllLiv->SelectByID($id);
  

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Editar Livros</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Editar Livro</h1>
        </div>
        <div class="row  black-text">
            <form action="edtLivro.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $livro->getID() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe descrição do livro" id="descricao" name="txtDesc" type="text" class="validate" 
                    value="<?php echo $livro->getDescricao();?>">
                    <label id="descricao" for="descricao">Descrição</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o Autor" id="autor" name="txtAut" type="number" class="validate" value="<?php echo $livro->getAutor();?>">
                    <label for="autor">Autor</label>
                </div>
                <div class="input-field col s5">
                    <input placeholder="informe a Quantidade em Estoque" id="quantidade" name="txtQtde" type="number" class="validate" value="<?php echo $livro->getQuantidade();?>">
                    <label for="quantidade">Quantidade em Estoque</label>
                </div>
                
                <div class="input-field col s8">
                    <label for="valor" style = "position:absolute; top:-35px">Valor</label>
                    <input placeholder="informe o Valor" id="valor" name="txtVal" type="float" class="validate" value="<?php echo $livro->getValor();?>">
                    
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstLivro.php'">
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