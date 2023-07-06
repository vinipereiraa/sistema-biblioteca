<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <?php include 'estilo/estilo.php'; ?>
</head>
<body>
    <div class="agroup">
        <h2 id="title">Seja bem vindo a Biblioteca Virtual &#128218;</h2>
        <br>
        <form action="php/bibliotecacontroller.php" method="POST" class="form">
        <label for="cod_livro">Código do Livro</label>
        <input type="text" name="cod_livro" id="input"><br><br>
        <label for="nome">Nome do Livro</label>
        <input type="text" name="nome" id="input"><br><br>
        <label for="autor">Autor do Livro</label>
        <input type="text" name="autor" id="input"><br><br>
        <label for="editora">Editora do Livro</label>
        <input type="text" name="editora" id="input"><br><br>
        <label for="edicao">Edição do Livro</label>
        <input type="text" name="edicao" id="input"><br><br>
        <label for="num_pgs">Número de Páginas</label>
        <input type="text" name="num_pgs" id="input"><br><br>
        <label for="ano_de_public">Ano de Publicação</label>
        <input type="text" name="ano_de_public" id="input"><br><br>
        <input type="submit" value="cadastrar" name="botao" class="inp">
        <input type="submit" value="deletar" name="botao" class="inp">
        <input type="submit" value="atualizar" name="botao" class="inp">
        <input type="submit" value="consultar" name="botao" class="inp">
        </form>
    </div>
</body>
</html>