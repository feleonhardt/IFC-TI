create database CRUD_;

use CRUD_;

create table Produtos(
	codigo int primary key auto_increment,
    descricao varchar(45),
    dataVenda date,
    valorUnitario decimal(8,2),
    quantidade int
);

insert into Produtos (descricao, dataVenda, valorUnitario, quantidade) values
('Teclado', '2017-09-22', 34.00, 3),
('Mouse', '2016-06-10', 45.67, 56),
('Monitor', '2015-05-22', 123.34, 745);





insert into Produtos (descricao, dataVenda, valorUnitario, quantidade) values
('CPU', '2018-04-07', 300.00, 2);
