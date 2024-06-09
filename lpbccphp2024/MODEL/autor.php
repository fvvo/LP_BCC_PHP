<?php
namespace MODEL;

class autor{
    private ?int $id;
    private ?string $nome;
    public function __construct(){}

    public function getID(){return $this->id;}
    public function setId(int $id){$this->id = $id;}
    public function getDescricao(){return $this->nome;}
    public function setDescricao(string $nome){$this->nome = $nome;}
   
}