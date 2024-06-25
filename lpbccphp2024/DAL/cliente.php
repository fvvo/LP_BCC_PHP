<?php
namespace DAL;
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\cliente.php';

class cliente{
    public function Select(){
        $sql = "Select * from cliente;";
        $con = Conexao::conectar();
        $registros=$con->query($sql);
        $con = Conexao::desconectar();

        foreach($registros as $linha){
            $cli = new \MODEL\cliente();

            $cli->setId($linha['id']);
            $cli->setNome($linha['nome']);
            $cli->setQtde($linha['qtdeLiv']);
            $cli->setData($linha['dataNascimento']);
            $lstCliente[]=$cli;
        }
        return $lstCliente;
    }
     public function SelectByID(int $id)    {
        //recuperar do banco de dados
        $sql = "Select * from cliente where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $cli = new \MODEL\cliente();
        $cli->setId($linha['id']);
        $cli->setNome($linha['nome']);
        $cli->setQtde($linha['qtdeLiv']);
        $cli->setData($linha['dataNascimento']);
        return $cli;
    }

    public function Insert(\MODEL\cliente $cli){
        $sql = "INSERT INTO cliente (nome,dataNascimento) VALUES (?,?) ;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($cli->getNome(),$cli->getData()));
        $con = Conexao::desconectar();
      
        return $result; 
    }
    
    public function Update(\MODEL\cliente $cli){
        $sql = "UPDATE cliente SET nome = ?, dataNascimento = ?, qtdeLiv = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($cli->getNome(), $cli->getData(), $cli->getQtde(), $cli->getID()));
        $con = Conexao::desconectar();
      
        return $result; 
    }
}