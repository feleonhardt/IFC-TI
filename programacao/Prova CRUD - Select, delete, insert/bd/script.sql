use crud;

create table Consultas(
	codigo int primary key auto_increment,
    nome_paciente varchar(150),
    nome_medico varchar(150),
    data_consulta date,
    medicamento varchar(10),
    tipo_consulta varchar(150),
    valor_consulta decimal(8,2)
);

insert into Consultas(nome_paciente,  nome_medico, data_consulta, medicamento, tipo_consulta, valor_consulta) values
('Júlia Isabeli Krambeck', 'Ana Jacinta', '2018-09-21', 'Não', 'Plano de Saúde', 100.00),
('Katia Krambeck', 'Floriano Peixoto', '2019-01-05', 'Não', 'SUS', 355.90),
('Bruna Caroline', 'Lorival Becker', '2018-12-02', 'Sim', 'Particular', 150.45),
('Edilson Krambeck', 'Raul Meyer', '2019-02-24', 'Sim', 'Social', 120.10);

select * from Consultas;