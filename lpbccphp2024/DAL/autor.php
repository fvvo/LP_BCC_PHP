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
            $aut->setNome($linha['nome']);
            $aut->setQtde($linha['qtdeLivPubli']);
            $aut->setEditora($linha['editora']);
            $lstAutor[]=$aut;
        }
        return $lstAutor;
    }
      public function SelectByID(int $id)    {
        //recuperar do banco de dados
        $sql = "Select * from autor where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $inv = new \MODEL\autor();
        $inv->setId($linha['id']);
        $inv->setNome($linha['nome']);
        $inv->setQtde($linha['qtdeLivPubli']);
        $inv->setEditora($linha['editora']);
        return $inv;
    }

    public function Insert(\MODEL\Autor $inv){
        $sql = "INSERT INTO autor (nome,editora) VALUES (?,?) ;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($inv->getNome(),$inv->getEditora()));
        $con = Conexao::desconectar();
      
        return $result; 
    }

}