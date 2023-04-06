<?php

include 'bibliotecadao.php';
include 'livro.php';

$cod_livro = filter_input(INPUT_POST, 'cod_livro');
$nome = filter_input(INPUT_POST, 'nome');
$autor = filter_input(INPUT_POST, 'autor');
$editora = filter_input(INPUT_POST, 'editora');
$edicao = filter_input(INPUT_POST, 'edicao');
$num_pgs = filter_input(INPUT_POST, 'num_pgs');
$ano_de_public = filter_input(INPUT_POST, 'ano_de_public');
$botao = filter_input(INPUT_POST ,'botao');

$liv = new Livros();
$livdao = new bibliotecadao();

$liv->setCodigo($cod_livro);
$liv->setNome($nome);
$liv->setAutor($autor);
$liv->setEditora($editora);
$liv->setEdicao($edicao);
$liv->setNum_Pgs($num_pgs);
$liv->setAnoPublic($ano_de_public);

if($botao == 'cadastrar'){
    $livdao->cadastrarlivro($liv);
}else if ($botao == 'deletar'){
    $livdao->deletarlivro($liv);
}else if ($botao == 'atualizar'){
    $livdao->atualizarlivros($liv);
}else if ($botao == 'consultar'){
    $livdao->consultaLivros();
    foreach($livdao->consultaLivros() as $resultado){
        echo $resultado['cod_livro'];
        echo $resultado ['nome'];
        echo $resultado ['autor'];
        echo $resultado ['editora'];
        echo $resultado ['edicao'];
        echo $resultado ['num_pags'];
        echo $resultado ['ano_de_public'];
    }
}

