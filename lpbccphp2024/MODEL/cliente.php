<?php
namespace MODEL;

class cliente{
    private ?int $id;
    private ?string $nome;
    private ?int $qtdeLiv;
    public function __construct(){}

    public function getID(){return $this->id;}
    public function setId(int $id){$this->id = $id;}
    public function getNome(){return $this->nome;}
    public function setNome(string $nome){$this->nome = $nome;}
    public function getQtde(){return $this->qtdeLiv;}
    public function setQtde(int $qtdeLiv){$this->qtdeLiv = $qtdeLiv;}
   
}