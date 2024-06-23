<?php
include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\autor.php';


$bllAut = new \BLL\autor();
$lstAut = $bllAut->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Autores</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Autores</h1>

   <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Editora</th>
            <th>Quantidade de Livros Publicados</th>
           
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formAutor.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstAut as $aut) { ?>
            <tr>
                <td><?php echo $aut->getId(); ?></td>
                <td><?php echo $aut->getNome(); ?></td>
                <td><?php echo $aut->getEditora(); ?></td>
                <td><?php echo $aut->getQtde(); ?></td>
                
               
            </tr>
        <?php } ?>

    </table>
</body>

</html>