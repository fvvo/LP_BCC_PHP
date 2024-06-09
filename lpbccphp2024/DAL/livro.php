<?php
namespace DAL;
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\livro.php';

class livro{
    public function Select(){
        $sql = "Select * from livro;";
        $con = Conexao::conectar();
        $registros=$con->query($sql);
        $con = Conexao::desconectar();

        foreach($registros as $linha){
            $liv = new \MODEL\livro();

            $liv->setId($linha['id']);
            $liv->setDescricao($linha['descricao']);
            $liv->setAutor($linha['autor']);
            $liv->setQuantidade($linha['quantidade']);
            $liv->setValor($linha['valor']);
            $lstLivro[]=$liv;
        }
        return $lstLivro;
    }
}