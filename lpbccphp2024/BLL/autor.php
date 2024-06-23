<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\autor.php';


class autor{
    public function Select(){
        $dalAutor = new \DAL\autor();
        return $dalAutor->Select();
    }
    public function SelectByID(int $id){   
        $dalAutor = new \DAL\Autor();   
        return $dalAutor->SelectByID($id);
    }

    public function Insert(\MODEL\Autor $autor) {
        $dalAutor = new \DAL\Autor();   
        return $dalAutor->Insert($autor);
    }
}

?>