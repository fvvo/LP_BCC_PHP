<?php 
  namespace VIEW\Livro;
  include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\livro.php'; 
  include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\livro.php'; 

  $livro = new \MODEL\Livro();
    
  $livro->setId($_POST['txtID']);
  $livro->setDescricao($_POST['txtDesc']);
  $livro->setAutor($_POST['txtAut']);
  $livro->setQuantidade($_POST['txtQtde']);
  $livro->setValor($_POST['txtVal']);
    
  $bllLivro = new \BLL\Livro(); 
  $result =  $bllLivro->Update($livro);  


  header("location: lstLivro.php");

?>