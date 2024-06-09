<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\autor.php';


class autor{
    public function Select(){
        $dalLivro = new \DAL\autor();
        return $dalLivro->Select();
    }
}

?>