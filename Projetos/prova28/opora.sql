create database opora;

use opora;

create table venda (
    codigo int primary key auto_increment,
    descricao varchar(45),
    dataVenda varchar(50),
    valorUnit decimal(8,2),
    quantidade int
);

insert into venda(descricao, dataVenda, valorUnit, quantidade) 
values  ('teclado', '2017/09/22', '34.00', '3'),
		('mouse', '2016/06/10', '45.67', '56'),
        ('monitor', '2017-05-22', '123.34', '745');



