<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\livro.php';


class livro{
    public function Select()    {
        $dalLivro = new \DAL\livro();
    
        return $dalLivro->Select();
    }
}

?>