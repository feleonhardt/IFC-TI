create database consultas;
use consultas;

create table consultas (
codigo int primary key auto_increment,
paciente varchar(255),
medico varchar(255),
data date,
tipo varchar(255),
valor double 
);

insert into consultas (paciente, medico, data, tipo, valor) values
('Virginia', 'Herbert', '2019-10-22', 'SUS', 350),
('Anthony', 'Quentin', '2019-10-23', 'Plano de Saúde', 208.54),
('Batista', 'Valter', '2019-10-24', 'Particular', 123.76),
('Loredana', 'Reginaldo', '2019-10-25', 'Social', 400.98),
('Melissa', 'Dionisio', '2019-10-26', 'Social', 397.54);

select * from consultas;

drop database consultas;