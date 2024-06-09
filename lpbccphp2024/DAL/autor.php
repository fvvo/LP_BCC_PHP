<?php
namespace DAL;
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\autor.php';

class autor{
    public function Select(){
        $sql = "Select * from autor;";
        $con = Conexao::conectar();
        $registros=$con->query($sql);
        $con = Conexao::desconectar();

        foreach($registros as $linha){
            $aut = new \MODEL\autor();

            $aut->setId($linha['id']);
            $aut->setNome($linha['descricao']);
            
            $lstAutor[]=$aut;
        }
        return $lstAutor;
    }
}