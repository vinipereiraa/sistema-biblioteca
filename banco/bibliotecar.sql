create database biblioteca;

use biblioteca;

create table livro(
cod_livro int primary key auto_increment,
nome varchar(50),
autor varchar(250),
editora varchar(90),
edicao varchar(5),
num_pags int,
ano_de_public int 
);

select * from livro;