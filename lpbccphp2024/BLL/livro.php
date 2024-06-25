<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\livro.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\autor.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\cliente.php';


class livro{
    public function Select()    {
        $dalLivro = new \DAL\livro();
    
        return $dalLivro->Select();
    }
    public function SelectByID(int $id){   
        $dalLivro = new \DAL\livro();   
        return $dalLivro->SelectByID($id);
    }

    public function Insert(\MODEL\livro $livro) {
        $dalLivro = new \DAL\livro();   
        $dalAutor=new \DAL\Autor();    
        $aut = new \MODEL\autor();
        $aut = $dalAutor->SelectByID($livro->getAutor());
        $aut->setQtde($aut->getQtde()+1);
        $dalAutor->Update($aut);
     
        
        return $dalLivro->Insert($livro);
    }


    public function Update(\MODEL\livro $livro) {
        $dalLivro = new \DAL\livro();   
        
        
        return $dalLivro->Update($livro);
    }

    public function Delete(int $id){   
        $dalLivro = new \DAL\livro(); 
        $dalAutor=new \DAL\Autor();   
        $aut = new \MODEL\autor();
        $livro = $dalLivro->SelectByID($id);
        $aut = $dalAutor->SelectByID($livro->getAutor());
        $aut->setQtde($aut->getQtde()-1);
        $dalAutor->Update($aut);  
        return $dalLivro->Delete($id);
    }
        public function venda(int $idLiv,int $idCli){   
        $dalLivro = new \DAL\livro(); 
        $dalCliente=new \DAL\Cliente();   
        $cli = new \MODEL\cliente();
        $livro = $dalLivro->SelectByID($idLiv);
        $cli = $dalCliente->SelectByID($idCli);
        $cli->setQtde($cli->getQtde()+1);
        $livro->setQuantidade($livro->getQuantidade()-1);
        $dalCliente->Update($cli);  
        return $dalLivro->Update($livro);
    }

    
}


?>