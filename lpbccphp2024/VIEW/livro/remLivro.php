<?php 
    namespace VIEW\Livro;
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Livro.php'; 

    $id = $_GET['id']; 

    $bllLiv = new \BLL\Livro(); 
    $result =  $bllLiv->Delete($id);  
    
    header("location: lstLivro.php");
?>