<?php
namespace MODEL;
class livro{

    private ?int $id;
    private ?string $descricao;
    private ?int $autor;
    private ?int $quantidade;
    private ?float $valor;
    public function __construct(){}

    public function getID(){return $this->id;}
    public function setId(int $id){$this->id = $id;}
    public function getDescricao(){return $this->descricao;}
    public function setDescricao(string $descricao){$this->descricao = $descricao;}
    public function getAutor(){return $this->autor;}
    public function setAutor(int $autor){$this->autor = $autor;}
    public function getQuantidade(){return $this->quantidade;}
    public function setQuantidade(int $quantidade){$this->quantidade = $quantidade;}
    public function getValor(){return $this->valor;}
    public function setValor(float $valor){$this->valor = $valor;}
}