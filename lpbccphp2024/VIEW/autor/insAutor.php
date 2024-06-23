<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Autor.php'; 
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Autor.php'; 

    $autor = new \MODEL\Autor();

    $autor->setNome($_POST['txtNome']);
    $autor->setEditora($_POST['txtEdi']);


    $bllAut = new \BLL\Autor(); 
    $result =  $bllAut->Insert($autor);  

    header("location: lstAutor.php");

  

?>