<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\cliente.php';


class cliente{
    public function Select(){
        $dalLivro = new \DAL\cliente();
        return $dalLivro->Select();
    }
    public function SelectByID(int $id){   
        $dalcli = new \DAL\cliente();   
        return $dalcli->SelectByID($id);
    }

    public function Insert(\MODEL\cliente $cliente) {
        $dalCliente = new \DAL\cliente();   
        return $dalCliente->Insert($cliente);
    }
}

?>