create database vendas;

use vendas;

create table marca(
codigo integer auto_increment not null primary key,
descricao varchar(225) not null
);

insert into marca(descricao)
values("um"),("dois"),("tres"),("quatro"),("cinco");

select * from vendas.marca;

UPDATE marca set descricao = 'tres' where codigo = 5;
