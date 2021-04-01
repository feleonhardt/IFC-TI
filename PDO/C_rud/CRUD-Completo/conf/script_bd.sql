

create database vendas_alterado;

use vendas_alterado;

create table produtos(
codigo integer auto_increment not null primary key,
descricao varchar(225) not null,
valor double,
quantidade int
);

insert into produtos(descricao, valor, quantidade) values
("um", 1.11, 1),
("dois", 2.22, 2),
("tres", 3.33, 3),
("quatro", 4.44, 4),
("cinco", 5.55, 5);

select * from produtos;
