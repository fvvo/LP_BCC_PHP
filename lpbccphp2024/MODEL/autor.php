<?php
namespace MODEL;

class autor{
    private ?int $id;
    private ?string $nome;
    public function __construct(){}

    public function getID(){return $this->id;}
    public function setId(int $id){$this->id = $id;}
    public function getNome(){return $this->nome;}
    public function setNome(string $nome){$this->nome = $nome;}
   
}