<?php 
    namespace VIEW\Livro;
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Livro.php'; 

    $idLivro = $_POST['txtID']; 
    $idCliente = $_POST['txtCli']; 


    $bllLiv = new \BLL\Livro(); 
    $result =  $bllLiv->Venda($idLivro, $idCliente);  
    
    header("location: lstLivro.php");
?>