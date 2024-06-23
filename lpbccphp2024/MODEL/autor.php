<?php
namespace MODEL;

class autor{
    private ?int $id;
    private ?string $nome;
    private ?int $qtdeLivPubli;
    private ?string $editora;
    public function __construct(){}

    public function getID(){return $this->id;}
    public function setId(int $id){$this->id = $id;}
    public function getNome(){return $this->nome;}
    public function setNome(string $nome){$this->nome = $nome;}
    
    public function getQtde(){return $this->qtdeLivPubli;}
    public function setQtde(int $qtdeLivPubli){$this->qtdeLivPubli = $qtdeLivPubli;}
    
    public function getEditora(){return $this->editora;}
    public function setEditora(string $editora){$this->editora = $editora;}
    
}