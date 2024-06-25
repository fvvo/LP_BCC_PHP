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
        public function SelectByID(int $id){
        //recuperar do banco de dados
        $sql = "Select * from livro where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $liv = new \MODEL\livro();
        $liv->setId($linha['id']);
        $liv->setDescricao($linha['descricao']);
        $liv->setAutor($linha['autor']);
        $liv->setQuantidade($linha['quantidade']);
        $liv->setValor($linha['valor']);
   
        return $liv;
    }

    public function Insert(\MODEL\livro $livro){
        $sql = "INSERT INTO livro (descricao, autor, quantidade, valor) VALUES (?,?, ?, ?);";
          
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($livro->getDescricao(),$livro->getAutor(),$livro->getQuantidade(),$livro->getValor()));
        $con = Conexao::desconectar();
        
        return $result; 

    }

    public function Update(\MODEL\livro $livro){
        $sql = "UPDATE livro SET descricao = ?, autor = ?, quantidade = ?, valor = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($livro->getDescricao(), $livro->getAutor(), $livro->getQuantidade(), $livro->getValor(), $livro->getID()));
        $con = Conexao::desconectar();
      
        return $result; 
    }

    public function Delete($id){
        $sql = "delete from livro WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array( $id ));
        $con = Conexao::desconectar();
      
        return $result; 
    }
}