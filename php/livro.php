<?php

class livros{ 
    private $cod_livro;
    private $nome;
    private $autor;
    private $editora; 
    private $edicao;
    private $num_pgs; 
    private $ano_de_public;  

    public function getCodigo(){
        return $this->cod_livro;
    }

    public function setCodigo($cod_livro){
       return $this->cod_livro = $cod_livro;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
       return $this->autor = $autor;
    }

    public function getEditora(){
        return $this->editora;
    }

    public function setEditora($editora){
       return $this->editora = $editora;
    }

    public function getEdicao(){
        return $this->edicao;
    }

    public function setEdicao($edicao){
        return $this->edicao = $edicao;
    }

    public function getNum_Pgs(){
        return $this->num_pgs;
    }

    public function setNum_Pgs($num_pgs){
        return $this->num_pgs = $num_pgs; 
    }

    public function getAnoPublic(){
        return $this->ano_de_public;
    }

    public function setAnoPublic($ano){
        return $this->ano_de_public = $ano;
    }
}