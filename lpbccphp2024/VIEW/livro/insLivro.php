<?php 
    namespace VIEW\livro;
    include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\livro.php'; 
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\livro.php'; 

    $livro = new \MODEL\livro();

    $livro->setDescricao($_POST['txtDesc']);
    $livro->setAutor($_POST['txtAut']);
    $livro->setQuantidade($_POST['txtQtde']);
    $livro->setValor($_POST['txtVal']);
    $cli=$_POST['txtCli'];

    $bllEqpto = new \BLL\livro(); 
    $result =  $bllEqpto->Insert($livro);  

 
        header("location: lstLivro.php");

  

?>