create database consulta;

use consulta;

create table consulta(
codigo int auto_increment primary key,
descricao varchar(45),
dataVenda date,
valorUnitario double,
quantidade int
);

insert into consulta (descricao, dataVenda, valorUnitario, quantidade) values 
('Teclado', '2017-09-22', 34.00, 3),
('Mouse', '2016-06-10', 45.67, 56),
('Monitor', '2015-05-22', 123.34, 745),
('Pendrive', '2017-05-03', 4.00, 3544),
('Mouseped', '2016-01-11', 99.99, 9),
('HD', '2015-04-02', 12394.34, 55);

select * from consulta;

select *, valorUnitario * quantidade as valorItem from consulta;
select sum(valorUnitario * quantidade) from consulta;
SELECT avg(nota1) as nota1, avg(nota2) as nota2, avg(nota3) as nota3, avg((nota1+nota2+nota3)/3) as media  FROM alunos;