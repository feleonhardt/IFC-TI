create database crud;

use crud;

create table prova(
codigo int auto_increment primary key,
paciente varchar(45),
medico varchar(45),
dataconsulta date,
tipo varchar(45),
valor decimal(16,2)
);

insert into prova
values (null, 'Rojerio', 'Claudinho', '2018-05-12', 'SUS', 500.00),
		(null, 'Berto', 'Flavio', '2018-09-24', 'SUS', 856.00),
        (null, 'tomas', 'xico', '2000-12-01', 'Social', 500.50),
        (null, 'jeferson', 'belo', '2008-01-05', 'Particular', 10000.00),
        (null, 'clovis', 'morelo', '2015-08-30', 'Social', 2000.60),
        (null, 'Rojério', 'Claudinho', '2018-05-12', 'SUS', 500.00);
        
        insert into prova
values (null, 'clovi', 'robson', '2018-05-12', 'plano de saude', 500.00);
        drop table prova;
        
        SELECT * FROM prova WHERE tipo = 'SUS' ORDER BY codigo;
        SELECT * FROM prova WHERE tipo like tipo ORDER BY tipo;
        
        select * from prova;