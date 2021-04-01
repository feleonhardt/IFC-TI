create database teste_cadastro;

use teste_cadastro;

create table if not exists usuarios(
codigo int not null auto_increment primary key,
nome varchar(50) not null,
login varchar(50) not null,
senha varchar(50) not null,
data_nascimento date not null,
email varchar(100) not null
);