<?php 
    include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php'; 

    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

    
    $sql = "Select * from usuario where usuario=?;";
    $con = \dal\Conexao::conectar(); 
    $query = $con->prepare($sql);

    try{
       $query->execute (array($usuario));
       $linha = $query->fetch(\PDO::FETCH_ASSOC);
    }
    catch (Exception $e) { echo "usuario inexistente"; }

    \dal\Conexao::desconectar(); 



  if (md5($senha) == $linha['senha']){
       session_start();
       $_SESSION['login'] = $usuario ;
  
       header("location:menu.php"); 
    }
    else header("location:index.php"); 

    ?>