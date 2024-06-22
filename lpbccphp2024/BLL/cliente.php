<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\cliente.php';


class cliente{
    public function Select(){
        $dalLivro = new \DAL\cliente();
        return $dalLivro->Select();
    }
}

?>