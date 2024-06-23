<?php
include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\cliente.php';


$bllCli = new \BLL\cliente();
$lstCli = $bllCli->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Clientes</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Clientes</h1>

   <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Quantidade de Livros Comprados</th>
           
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formCliente.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstCli as $cli) { ?>
            <tr>
                <td><?php echo $cli->getId(); ?></td>
                <td><?php echo $cli->getNome(); ?></td>
                <td><?php echo $cli->getData(); ?></td>
                <td><?php echo $cli->getQtde(); ?></td>
                
               
            </tr>
        <?php } ?>

    </table>
</body>

</html>