<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Cliente.php'; 
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Cliente.php'; 

    $cliente = new \MODEL\Cliente();

    $cliente->setNome($_POST['txtNome']);
    $cliente->setData($_POST['txtData']);


    $bllcli = new \BLL\Cliente(); 
    $result =  $bllcli->Insert($cliente);  

    header("location: lstCliente.php");

  

?>