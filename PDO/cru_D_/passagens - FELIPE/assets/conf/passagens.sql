create database avioes;

use avioes;
drop table passagens;

create table passagens(
codigo int auto_increment primary key,
passageiro varchar(225),
poltrona varchar(225),
data date,
origem varchar(225),
destino varchar(225),
valor double,
checkin boolean
);

insert into passagens(passageiro, poltrona, data, origem, destino, valor, checkin) values
('Coringa', '12A', '2019-10-22', 'São Paulo', 'Rio do sul', 334.54, 1),
('Batman', '24C', '2019-11-22', 'Brasília', 'Rio de Janeiro', 389.21, 1),
('Super Homem', '56D', '2019-11-05', 'Rio do Sul', 'São Paulo', 598.76, 0),
('Homem de Ferro', '09B', '2020-03-30', 'Brasília', 'Navegantes', 256.76, 0),
('Mulher Maravilha', '34E', '2020-02-15', 'São Paulo', 'Rio de Janeiro', 786.43, 1),
('Thanos', '22F', '2019-12-10', 'Rio de Janeiro', 'Rio do Sul', 845.98, 0); 

select * from passagens;

SELECT * from passagens where data>= '2019-12-20' and data<= '2020-05-25' order by data;