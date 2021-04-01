create database CRUD_;

use CRUD_;

create table Funcionario(
	codigo int primary key auto_increment,
    nome varchar (150),
    idade int,
    departamento varchar (150),
    data_admissao date,
    salario decimal(16,2),
    telefone varchar(50)
);

insert into Funcionario (nome, idade, departamento, data_admissao, salario, telefone) values
('Alberto da Silva', 25, 'Vendas', '2005-11-21', 850.00, '555-1902'),
('Antônio dos Santos', 32, 'Administração', '2011-06-15', 1200.00, '555-1117'),
('Fabiana Rossi', 40, 'Administração', '2017-01-04', 2000.00, '555-8929'),
('Horácio Almeida', 31, 'Recursos Humanos', '2012-03-27', 1350.00, '555-8907'),
('João Pereira', 35, 'Vendas', '2009-09-11', 1500.00, '555-7814'),
('Márcio Souza', 26, 'Vendas', '2001-07-21', 600.00, '555-9800'),
('Maria José Costa', 22, 'Vendas', '2018-03-26', 600.00, '555-6629'),
('Mário Oliveira', 54, 'Diretoria', '2015-07-03', 4500.00, '555-1237'),
('Roberto Albuquerque', 29, 'Administração', '2013-02-11', 1200.00, '555-8273'),
('Silvia Peres', 23, 'Vendas', '1997-12-31', 600.00, '555-8664');

