<?php

include 'conexao.php';

class bibliotecadao{

    /* CRUD */

    /* CREATE */
    public function cadastrarlivro(livros $b){
        $sql = 'insert into livro (nome, autor, editora, edicao, num_pags, ano_de_public) values(?, ?, ?, ?, ?, ?)';

        $banco = new Conexao();
        $conLivros = $banco->getConexao();

        $valores = $conLivros->prepare($sql);
        $valores -> bindValue(1, $b->getNome());
        $valores -> bindValue(2, $b->getAutor());
        $valores -> bindValue(3, $b->getEditora());
        $valores -> bindValue(4, $b->getEdicao());
        $valores -> bindValue(5, $b->getNum_Pgs());
        $valores -> bindValue(6, $b->getAnoPublic());

        $result = $valores->execute();

        if($result){
            echo "cadastrado com sucesso";
        }else{
            echo "erro ao cadastrar";
        }
    }

    /* READ */
    public function consultaLivros(){
        $sql = "select * from livro";

        $banco = new Conexao();
        $conLivros = $banco->getConexao();

        $valores = $conLivros->prepare($sql);
        $valores->execute();

        if($valores->rowCount()>0){
            $result = $valores->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }

    /* UPDATE */
    public function atualizarLivros(livros $b){
        $sql = 'update livro set nome=?, autor=?, editora=?, edicao=?, num_pags=?, ano_de_public=? where cod_livro=?';

        $banco = new Conexao();
        $conLivros = $banco->getConexao();

        $valores = $conLivros->prepare($sql);
        $valores -> bindValue(1, $b->getNome());
        $valores -> bindValue(2, $b->getAutor());
        $valores -> bindValue(3, $b->getEditora());
        $valores -> bindValue(4, $b->getEdicao());
        $valores -> bindValue(5, $b->getNum_Pgs());
        $valores -> bindValue(6, $b->getAnoPublic());
        $valores -> bindValue(7, $b->getCodigo());

        $result = $valores->execute();

        if($result){
            echo "atualizado com sucesso";
        }else{
            echo "erro ao atualizar";
        }
    }

    /* DELETE */
    public function deletarLivro(Livros $b){
    $sql = 'delete from livro where cod_livro=?';

    $banco = new Conexao();
    $conLivros = $banco->getConexao();
    
    $valores = $conLivros->prepare($sql);
    $valores->bindValue(1, $b->getCodigo());

    $result = $valores->execute();

    if($result){
        echo "deletado com sucesso";
    }else{
        echo "erro ao deletar";
        }
    }
}