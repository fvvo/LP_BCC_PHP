<?php
include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\livro.php';
use BLL\Equipamento;

$bllLiv = new \BLL\livro();
$lstLiv = $bllLiv->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Livros</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Livros</h1>

   <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Autor</th>
            <th>Quantidade em estoque</th>
            <th>Valor</th>
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formLivro.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstLiv as $liv) { ?>
            <tr>
                <td><?php echo $liv->getId(); ?></td>
                <td><?php echo $liv->getDescricao(); ?></td>
                <td><?php echo $liv->getAutor(); ?></td>
                <td><?php echo $liv->getQuantidade(); ?></td>
                <td><?php echo $liv->getValor(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtLiv.php?id=' + '<?php echo $liv->getID(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetLiv.php?id=' + '<?php echo $liv->getID(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $liv->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Livro ' + id + '?')) {
            location.href = 'remLivro.php?id=' + id;
        }
    }
</script>