create database consulta_exclusao;

use consulta_exclusao;

create table estados(
codigo int auto_increment primary key,
nome varchar(225) not null,
sigla varchar(2) not null
);

create table clientes(
codigo int auto_increment primary key,
nome varchar(225) not null,
email varchar(225) not null,
telefone varchar(20)
);

create table vendedores(
codigo int auto_increment primary key,
login varchar(225) not null,
senha varchar(225) not null,
nome varchar(225) not null,
email varchar(225) not null,
telefone varchar(20)
);
create table jogadores(
codigo int auto_increment primary key,
nome varchar(225) not null,
time varchar(225) not null,
posicao varchar(225) not null,
gol int not null
);

create table times (
codigo int auto_increment primary key,
nome varchar(225) not null,
torcedores int not null,
cidade varchar(225)
);

insert into estados(nome, sigla) values
('Santa Catarina', 'SC'),
('Paraná', 'PR'),
('Rio Grande do Sul', 'RS'),
('Paraiba', 'PB'),
('Pernambuco', 'PE');

select * from estados;

insert into clientes(nome, email, telefone) values
('Catarina', 'catarina_santa@hotmail.com', '47 9 99944556'),
('Pablo', 'ppappa_pablo@gmail.com', '47 9 96243746'),
('Ricardo', 'rico123_cardo@gmail.com', '47 9 88463254'),
('Paula', 'paulinha_99@hotmail.com', '47 9 87346523'),
('Pedro', 'pedroca.pepe@gmail.com', '47 9 98846454');

select * from clientes;

insert into vendedores(nome, email, telefone, login, senha) values
('Catarina', 'catarina_santa@hotmail.com', '47 9 99944556', 'cah123', '12345'),
('Pablo', 'ppappa_pablo@gmail.com', '47 9 96243746', 'ppa_pablo', 'pablopablo'),
('Ricardo', 'rico123_cardo@gmail.com', '47 9 88463254', 'rico171', 'muitorico'),
('Paula', 'paulinha_99@hotmail.com', '47 9 87346523', 'paulinha', 'paula'),
('Pedro', 'pedroca.pepe@gmail.com', '47 9 98846454', 'pedrinho_1', '98764');

select * from vendedores;

insert into jogadores(nome, posicao, gol, time) values
('Catarina', 'central', '6', 'Chapecoense'),
('Pablo', 'ponta-esquerda', '6', 'São Paulo'),
('Ricardo', 'atacante', '54', 'Internacional'),
('Paula', 'pivô', '23', 'Grêmio'),
('Pedro', 'ponta-direita', '4', 'Flamengo');

select * from jogadores;

insert into times(cidade, torcedores, nome) values
('Chapecó', '6000000', 'Chapecoense'),
('São Paulo', '6000000', 'São Paulo'),
('Porto Alegre', '54000000', 'Internacional'),
('Porto Alegre', '23000000', 'Grêmio'),
('Rio de Janeiro', '40000000', 'Flamengo');

select * from times;

show COLUMNS FROM estados;