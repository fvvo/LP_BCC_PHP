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
            $cli = new \MODEL\autor();

            $cli->setId($linha['id']);
            $cli->setNome($linha['nome']);
            $cli->setNome($linha['qtdeLiv']);
            $lstCliente[]=$cli;
        }
        return $lstCliente;
    }
}